<?php

namespace App\Services;

use App\Repository\BusinessDesignRepository;
use App\Repository\BusinessCategoryRepository;
use App\Repository\BaseRepository;
use Collective\Html\FormFacade;

class BusinessDesignService
{
    public static $modelName = 'BusinessDesign';
    public static $jqTitles = ['radio_title',  'checkbox_title'];
    public static $needs = ['text', 'radio', 'checkbox'];
    public static $needTitle = ['radio', 'checkbox'];

    function __construct(
        BusinessDesignRepository $businessDesignRepository,
        BusinessCategoryRepository $businessCategoryRepository,
        BaseRepository $baseRepository
    ) {
        $this->businessCategoryRepository = $businessCategoryRepository;
        $this->businessDesignRepository =  $businessDesignRepository;
        $this->baseRepository =  $baseRepository;
    }


    //刪除 html attr資訊
    public function deleteHtmlAttr($id, $type, $around)
    {
        $busDesign = $this->businessDesignRepository->find($id);
        $attr = "";
        $attrKeys = ["text" => "text_attrs", "radio" => "radio_attrs", "checkbox" => "checkbox_attrs"];
        foreach ($attrKeys as $key => $att) {
            if ($type == $key) {
                $attr = $busDesign->$att;
                $decodeAttrs = json_decode($attr, true);
                unset($decodeAttrs[$around]);
                $busDesign->$att = $decodeAttrs;
            }
        }
        return $busDesign->save();
    }
    //取得jq title 解析
    public function parseJQtitle(array $data)
    {
        $collect = [];
        foreach ($data as $tag => $attrs) {
            foreach ($attrs as $attr => $title) {
                $attr = explode(",", $attr);
                $aroundMix = $attr[0];
                $around = explode("=", $aroundMix)[1]; //第幾次產生的                                
                $collect[$around][$tag] = $title;
            }
        }
        return $collect;
    }

    //取得jq title 解析
    public function get($id)
    {
        return $this->businessDesignRepository->find($id);
    }

    //資料轉化HTML 
    public function dataToHtml($data, $modelData = null)
    {
        $html = [];
        if ($data->text_attrs) {
            $html[] = $this->textAttrs($data->text_attrs, $modelData);
        }
        if ($data->radio_attrs) {
            $html[] = $this->multiSelect('radio', $data->radio_attrs, $modelData);
        }
        if ($data->checkbox_attrs) {
            $html[] = $this->multiSelect('checkbox', $data->checkbox_attrs, $modelData);
        }

        return join(" ", $html);;
    }

    // 產生 text      
    public function textAttrs($textAttrs, $modelData = null)
    {
        $html = '';
        if ($modelData) {
            $mDatas = explode(',', $modelData->text_attr);
        }
        $point = 1;
        $texts = json_decode($textAttrs, true);
        foreach ($texts as $k => $rows) {
            if (is_array($rows)) {
                foreach ($rows as $key => $name) {
                    if ($modelData) {
                        if(isset($mDatas[$point])){
                            $html .= $name . "<input type='text' style='margin-right:20px' name='text_attr[]' value=" . $mDatas[$point] . "> ";
                        }else{
                            $html .= $name . "<input type='text' style='margin-right:20px' name='text_attr[]' > ";     
                        }
                    } else {
                        $html .= $name . "<input type='text' style='margin-right:20px' name='text_attr[]' > ";
                    }
                    $point++;
                }
                $html .= "<br><br>";
            }
        }
        return $html;
    }
    // 產生 radio or checkbox
    public function multiSelect($type, $json, $modelData = null)
    {
        $html = '';
        $datas = json_decode($json, true);
        $modelName = "{$type}_attr";
        foreach ($datas as $k => $row) {
            if (isset($row['title'])) {
                $html .= "<br> <b style='margin-right:10px'>" . $row['title'] . "</b>  ";
            }
            foreach ($row['sub_titles'] as $key => $title) {
                $htmlValue = "{$k}_{$title}";
                
                $style = "margin-right:50px;";
                $html .= $title;
                if ($modelData == null) {
                    $str = "";
                } else {
                    if ($modelData->$modelName) {
                        $str = $modelData->$modelName ? $modelData->$modelName : "";
                    } else {
                        $str = '';
                    }
                }
                $checked = htmlIsChecked($htmlValue, $str);
                if ($type == 'radio') {
                    $HtmlName = "{$type}_attr[$k]";
                    $html .= FormFacade::radio($HtmlName, $htmlValue, ($checked == 1), ['style' => $style]);
                } else {
                    $HtmlName = "{$type}_attr[]";
                    $html .= FormFacade::checkbox($HtmlName, $htmlValue, ($checked == 1), ['style' => $style]);
                }
            }
        }
        return $html;
    }


    //取得jq tag data && 解析
    public function parseJQTagData(array $datas)
    {
        $collect = [];
        foreach ($datas as $tag => $attrs) {
            foreach ($attrs as $attr => $title) {
                $attr = explode(",", $attr);
                $aroundMix = $attr[0];
                $around = explode("=", $aroundMix)[1]; //第幾次產生的                

                $inputNameMix = $attr[1];
                $tagAround = explode("_", $inputNameMix)[2]; //什麼html tag 的第幾個

                $collect[$around][$tag][$tagAround] = $title;
            }
        }
        return $collect;
    }



    //處理jq產生的html
    public function translateJQData($request)
    {
        $datas = $request->except(['_token', 'info',  'files', 'html_attr_title', 'text', 'radio', 'checkbox']);
        $titleDatas = $request->only(self::$jqTitles);
        $titleDatas = self::parseJQtitle($titleDatas);

        $tagDatas = $request->only(self::$needs);
        $tagDatas = self::parseJQTagData($tagDatas);

        $collect = [];
        $collectAll = [];
        foreach ($tagDatas as $around => $tags) {
            foreach ($tags as $tag => $titles) {
                //如果是 radio && checkbox 需要主TITLE                
                if (in_array($tag, self::$needTitle)) {
                    $collect[$tag][$around] = ['sub_titles' => $titles, 'title' => $titleDatas[$around][$tag . '_title']];
                    // $collect[$tag][$around] = ['sub' => $titles, 'title' => $titleDatas[$around][$tag . '_title']];
                } else {
                    $collect[$tag][$around] = $titles;
                    // $collect[$tag][$around] = $titles;
                }
            }
        }
        unset($datas['checkbox_title']);
        unset($datas['radio_title']);
        if (!isset($datas['status'])) {
            $datas['status'] = 0;
        }
        //存成 table格式 
        foreach ($collect as $tag => $attrs) {
            $datas[$tag . "_attrs"] = json_encode($attrs);
        }
        return  $datas;
    }

    //寫入DB
    public function store($request)
    {
        $datas = $request;
        return $this->baseRepository->forEachStore(self::$modelName, $datas);
    }
    /**
     * 
     * 依HTML attr 內容成生SQL
     * 
     */
    public function generateSignupSQL($htmlAttrs, $tableName)
    {
        $createTableSQL = " CREATE TABLE `{$tableName}` (`id` bigint unsigned NOT NULL AUTO_INCREMENT,";
        foreach ($htmlAttrs  as $no => $htmlData) {
            foreach ($htmlData  as $type => $attrs) {
                if ($type == "text") {
                    foreach ($attrs as $k => $name) {
                        $createTableSQL .= "`{$type}_" . "{$no}_" . ($k + 1) . "` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,";
                    }
                } elseif ($type == "radio" || $type == "checkbox") {
                    $createTableSQL .= "`{$type}_{$no}` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,";
                } elseif ($type == "textarea") {
                    $createTableSQL .= "`{$type}_{$no}_1` text COLLATE utf8mb4_unicode_ci NOT NULL,";
                }
            }
        }
        $createTableSQL .= " 
            `business_category_id` int COMMENT 'business_category_id id' DEFAULT NULL ,
            `business_category_sub` varchar(255) COMMENT '分類文字說明 ' DEFAULT NULL ,
            `area_id` int COMMENT 'area id' DEFAULT NULL ,
            `industry_id` int COMMENT 'industry id' DEFAULT NULL ,
            `customer_id` int COMMENT 'customer id' DEFAULT NULL ,
            `customer_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL ,
            `created_at` timestamp NULL DEFAULT NULL,
            `updated_at` timestamp NULL DEFAULT NULL,
            PRIMARY KEY (`id`)
          ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;";
        return $createTableSQL;
    }

    //資料處理 回傳TITLT
    public function getListTitle($entity)
    {
        $titles = [];
        foreach (json_decode($entity->html_attrs, true) as $around => $attrs) {
            foreach ($attrs as $type => $names) {
                if ($type == 'text' || $type == 'textarea') {
                    $titles[$around] = $names;
                }
            }
        }
        if (!empty(json_decode($entity->html_attr_title, true))) {
            foreach (json_decode($entity->html_attr_title, true) as $attrs => $name) {
                $attr = explode(",", $attrs)[0];
                $around = explode("=", $attr)[1];
                $titles[$around] = $name;
            }
        }
        $titles[] = __('businessDesigns.category') . "1";
        $titles[] = __('businessDesigns.category') . "2";
        $titles[] = __('businessDesigns.area');
        $titles[] = __('businessDesigns.industry');
        for ($i = 1; $i <= count($titles); $i++) {
            if (is_array($titles[$i])) {
                foreach ($titles[$i] as $around => $val) {
                    $newTtitle[] = $val;
                }
            } else {
                $newTtitle[] = $titles[$i];
            }
        }
        $newTtitle[] = __('businessDesigns.customer_id');
        $newTtitle[] = __('businessDesigns.customer_name');
        $newTtitle[] = __('businessDesigns.created_at');
        return $newTtitle;
    }

    public function getVaildationMsg($htmlAttrs, $required)
    {
        $attrs = json_decode($htmlAttrs, true);

        foreach ($required as $name => $val) {
            foreach (config('constants.html') as $key => $tag) {
                $spStr = explode($tag, $name);
                if (count($spStr) == 2) {
                    $counter = substr($spStr[1], 0, 1);
                    $htmlType = substr($spStr[1], -1);
                }
            }
        }
    }

    //成生 報名主單 
    public function storeMainForm($request, $htmlAttrs, $tableName)
    {
        $this->businessDesignRepository->store($request, $htmlAttrs, $tableName);
    }

    //成生 報名表DB 
    public function createSignUpTable($sqlSchema)
    {
        $this->baseRepository->sqlStore($sqlSchema);
    }

    //取得二層分類
    public function getBusCate2Form($cate2Id)
    {
        return $this->businessDesignRepository->getByField('business_category_2_id',$cate2Id);
    }

     


    //取得二層分類
    public function trafRadio($res,$name)
    {
        $html ="";
        foreach($res as $row){
            $html .="<label style=\"margin-right:10px;\">";        
            $html .="<input type=\"radio\" name=\"{$name}\" class=\"aj_{$name}\" value=\"{$row->id}\" >   <b>";
            $html .= $row->title;
            $html .="<b></label>";
        }
        return $html ;
    }
    //checkbox 處理
    public function arrayJoinString($datas, $name)
    {
        foreach ($datas as $str => $val) {
            if (strpos($str, $name) > 1) {
                $datas[$str] = join(",", $val);
            }
        }
        return $datas;
    }
    //報名寫入 SQL
    public function signup($data, $table)
    {
        $data["created_at"] = date("Y-m-d H:i:s");
        $data["updated_at"] = date("Y-m-d H:i:s");
        $this->baseRepository->dataStore($data, $table);
    }

    //欄位基本設定 
    public function getInitFieldsSetting()
    {
        return  [
            'business_category_id' => [
                'type' => 'select',
                'association' => [
                    'bool' => true,
                    'hasOne' => "\App\Models\BusinessCategory",
                    'type' => "hasOne",
                    'pluck' => ['title', 'id']
                ]
            ],
            'area_id' => [
                'type' => 'select',
                'association' => [
                    'bool' => true,
                    'hasOne' => "\App\Models\Area",
                    'type' => "hasOne",
                    'pluck' => ['name', 'id']
                ]
            ],
            'industry_id' => [
                'type' => 'select',
                'association' => [
                    'bool' => true,
                    'hasOne' => "\App\Models\Industry",
                    'type' => "hasOne",
                    'pluck' => ['name', 'id']
                ]
            ],
        ];
    }
    //ajax 取得資料 
    public function getBusinessCategoryChild($parent_id)
    {
        $children = $this->businessCategoryRepository->getChildren($parent_id);
        return $children->toArray();
    }
}
