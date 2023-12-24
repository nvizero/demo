<?php

namespace App\Services;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Auth;
use Hash;

class RequestService
{
    //那些 input 是必填
    public function isRequired($fieldsSetting)
    {
        $required = [];
        foreach ($fieldsSetting as $fiels => $setting) {
            if ($setting['required']) {
                $required[$fiels] =   $setting['required'] == 1 ? "required" : $setting['required'];
            }
        }
        return $required;
    }

    //如果寫入有檔案 
    public function fieldsHasFile($fieldsSetting)
    {
        $files = [];
        foreach ($fieldsSetting as $fiels => $setting) {
            if ($setting['type'] === 'file') {
                $files[$fiels] =   $setting['required'];
            }
        }
        return $files;
    }

    //如果寫入有ckeckbox 
    public function fieldsCheckbox($fieldsSetting, $request)
    {
        $ckeckbox = [];
        foreach ($fieldsSetting as $fiels => $setting) {
            if ($setting['type'] === 'checkbox') {
                if ($request->input($fiels)) {
                    $ckeckbox[$fiels] =  $request->input($fiels);
                } else {
                    $ckeckbox[$fiels] =   0;
                }
            }
        }
        return $ckeckbox;
    }
    //全部資料 
    public function collectData($inputAll, $inputChkbox, $imageData)
    {
        $array1 = array_merge($inputAll, $inputChkbox);
        if (empty($imageData)) {
            return $array1;
        } else {
            return array_merge($array1, $imageData);
        }
    }
    //如果寫入有system 必填
    public function fieldsSystem($fieldsSetting)
    {
        $system = [];
        foreach ($fieldsSetting as $fiels => $setting) {
            if (!not_system($setting['type']) || $setting['required'] == true) {
                if ($fiels == 'user_id') {
                    $system[$fiels] =  Auth::user()->id;
                } else {
                    $system[$fiels] =  Auth::user()->$fiels;
                }
            }
        }
        return $system;
    }

    //上傳QRCODE
    public function uploadQrcode($request, $entity){
        $mainKey = 'qrcode';
        $path = '';
        if ($request->hasfile($mainKey)) {
            $path = $request->file($mainKey)->store('qrcode');
            $entity->qrcode=$path ;
            $entity->save();
        }
        return $path;
    }

    //QRCODE解析
    public function parseQrcode($path, $entity){
      $filePath = storage_path("app/public/".$path);
      if (!file_exists($filePath)) {
          die("文件不存在: $filePath");
      }
      $client = new Client();

      try {
          $attrfile=[
              'name'     => 'file',
              'contents' => fopen($filePath,'r'),
              'filename' => explode("/",$path)[1]
          ];
          echo env('QRCODE_URL');
          print_r($attrfile);
          $response = $client->request('POST', env('QRCODE_URL','http://qrcode.errorstaff.com/upload'), [
              'headers' => [
                  'Accept' => 'application/json',
              ],
              'multipart' => [
                $attrfile
              ]
          ]);

          $statusCode = $response->getStatusCode();
          $body = $response->getBody()->getContents();

          // 处理响应...
          if($statusCode){
            $res =json_decode($body);
            $entity->parse_qrcode = $res->parsed;
            $entity->save();
          }else{
            echo "请求失败!";
          }
      } catch (GuzzleException $e) {
          // 处理异常...
          echo "请求失败: " . $e->getMessage();
      }
    }

    //多圖片上傳
    public function multiImgService($request, $entity,  $fieldsSetting, $main)
    {
        $mainKey = 'files';
        if ($request->hasfile($mainKey)) {
            $type = $fieldsSetting[$mainKey]['association']['type'];
            $model = $fieldsSetting[$mainKey]['association'][$type];
            foreach ($request->file($mainKey) as $key => $file) {
                $name = $file->getClientOriginalName();
                $refPath = "/uploads/$main/$entity->id/";
                $path = public_path() . $refPath;
                // $fileName = $path . $name;
                $file->move($path, $name);
                $imgRefence = new $model();
                $imgRefence->img = $refPath . $name;
                $imgRefence->model_type = $fieldsSetting[$mainKey]['association']['fromModel'];
                $imgRefence->model_id = $entity->id;
                $imgRefence->save();
            }
        }
    }

    //圖片上傳 回傳 CREATE格式 
    public function imgService($inputFiles, $request)
    {
        $inputData = [];
        foreach ($inputFiles as $fieldName => $requ) {
            if ($request->hasFile($fieldName)) {
                $site_id = Str::random(10);
                $imagePath = request($fieldName)->store("uploads/{$site_id}", 'public');
                $image = Image::make(public_path("storage/{$imagePath}"));
                $image->save(public_path("storage/{$imagePath}"), 60);
                $image->save();
                $inputData[$fieldName] = $imagePath;
            }
        }
        return $inputData;
    }
    /**
     * 搜尋處理
     */
    public function search($fieldsSetting, $request)
    {
        $all = $request->all();
        $search = [];
        $notInArray = ['page','direction','search','sort'];
        foreach (array_filter($all) as $name => $val) {

            // if ($name != 'page' && $name != "direction") {
            if(!in_array($name, $notInArray)){    
                $spliStr = explode("__", $name);
                if (strpos($name, "__") > 1) {
                    $name = $spliStr[0];
                }

                if (is_array($fieldsSetting[$name]['search']) && isset($val)) {

                    $level = $fieldsSetting[$name]['search']['level'];
                    if ($val !== 0) {

                        if ($level == 'equal') {
                            $search[] = [$name, '=', $val];
                        } elseif (count($spliStr) == 2) {
                            //時間區間                        
                            if ($spliStr[1] == 'start') {
                                $search[] = [$spliStr[0], ">=", "$val"];
                            } else {
                                $search[] = [$spliStr[0], "<=", "$val"];
                            }
                        } else {
                            $search[] = [$name, $level, "%$val%"];
                        }
                    }
                }
            }
        }
        return $search;
    }

    //存數據
    public function storeService($entity, $datas)
    {
        foreach ($datas as $key => $val) {
            if ($key == 'password') {
                $entity->$key = Hash::make($val);
            } else {
                $entity->$key = $val;
            }
        }
        if ($entity->save()) {
            return true;
        } else {
            return false;
        }
    }
}
