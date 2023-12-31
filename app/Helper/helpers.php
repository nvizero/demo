<?php

// 返回前台访问文件地址
use App\Models\BusinessCategory;
use App\Models\Business;
use App\Repository\BusinessCategoryRepository;
use App\Repository\BaseRepository;
use App\Services\BusinessService;
use App\Services\BaseService;
use App\Services\BusinessCategoryService;
use Carbon\Carbon;
use Illuminate\Support\Facades\Storage;
use StounhandJ\HtmldomLaravel\Htmldom;
use Illuminate\Support\Facades\Redis;

const DEFAULT_AVATAR = '/frontend/images/img/98681.jpeg';
const MARKET_DEFAULT_AVATAR = '/frontend/images/img/img01.jpg';


if (!function_exists('ms_str')) {
function ms_str($content , $len=500)
{
    if (!empty($content)) {
        $start = 0;

        // $str_lng = mb_strlen( strip_tags(trim($content)), "utf-8");
        // return  substr( strip_tags($content) , $start , $length );
        $a = $content;
        preg_match_all("/[\x80-\xff]/", $a, $r);
        $nn = join('', $r[0]);

        $length = empty($len)?$len: 600;
        // $str_lng = mb_strlen( strip_tags(trim($nn)), "utf-8");
        return  substr(strip_tags($nn), $start, $length);
    } else {
        return  false;
    }
}
}

if (!function_exists('findData')) {
    function findData($table, $id = 1)
    {
        if (empty($id) || empty($table)) {
            return false;
        }
        $key = $table . ":" . $id;
        if (Redis::exists($key)) {
            return Redis::get($key);
        }
        $baseResp = new BaseRepository();
        $service = new BaseService($baseResp);
        return $service->find($table, $id);
    }
}



if (!function_exists('getFirstAvatar')) {
    function getFirstAvatar($html, $type = '')
    {
        $html = new Htmldom($html);
        // Find all images 
        $imgs = [];
        foreach ($html->find('img') as $element) {
            $imgs[] = $element->src;
        }
        if ($type != 'market') {
            return isset($imgs[0]) ? $imgs[0] : DEFAULT_AVATAR;
        } else {
            return isset($imgs[0]) ? $imgs[0] : MARKET_DEFAULT_AVATAR;
        }
    }
}

// $data['semicCates'] = $this->baseService->getTableData('semic_cates', '');

if (!function_exists('getChkBoxs')) {
    function getChkBoxs($datas, $isFront = false)
    {
        $ids = explode(',', $datas);
        $baseResp = new BaseRepository();
        $service = new BaseService($baseResp);
        $sql = 'select * from semics where `id`  in(' . implode(',', array_filter($ids)) . '); ';
        $res = $service->raw($sql);
        $html = "";
        foreach ($res as $row) {
            $html .= "<label><input type=\"checkbox\" value=\"$row->id\" checked=true>{$row->title}</label>";
        }
        return $html;
    }
}


if (!function_exists('refSemics')) {
    function refSemics($datas)
    {
        $ids = explode(',', $datas);
        $baseResp = new BaseRepository();
        $service = new BaseService($baseResp);
        $sql = "select * from `semics` where `id` in ('".implode("','",array_filter($ids))."')";
        $res = $service->raw($sql);
        $html = "";
        foreach ($res as $row) {
            $html .= "<li><a href=\"/products-in/$row->id\">$row->title</a></li>";
        }
        return $html;
    }
}

if (!function_exists('refIron')) {
    function refIron($id)
    {
        
        $baseResp = new BaseRepository();
        $service = new BaseService($baseResp);
        $sql = "select * from irons where `reftext` like '%{$id}%'; ";
        $res = $service->raw($sql);
        $html = "";
        foreach ($res as $row) {
            $html .= "<li><a href=\"/services-in/$row->id\">$row->title</a></li>";
        }
        return $html;
    }
}

if (!function_exists('allSems')) {
    function allSems()
    {
        $baseResp = new BaseRepository();
        $service = new BaseService($baseResp);
        return $service->getTableData('semic_cates');
    }
}


//
if (!function_exists('traTable')) {
    function traTable(string $main = '')
    {
        if ($main == 'ironCates') {
            return 'iron_cates';
        } elseif ($main == 'semicCates') {
            return 'semic_cates';
        } else {
            return $main;
        }
    }
}
if (!function_exists('getAvatar')) {
    function getAvatar(string $avatar = '')
    {
        if ($avatar) {
            return fileUrl($avatar);
        }

        $user = auth('webcustomer')->user();
        if (!$user || !$user->avatar) {
            return DEFAULT_AVATAR;
        }
        return fileUrl($user->avatar);
    }
}

if (!function_exists('fileUrl')) {
    function fileUrl(string $path)
    {
        return asset(Storage::url($path)) . '?t=' . Carbon::now()->getTimestamp();
    }
}
//取得業務分類 
if (!function_exists('getBusCate')) {
    function getBusCate(int $cateId)
    {
        $model = new BusinessCategory();
        $reps = new BusinessCategoryRepository($model);
        $service = new BusinessCategoryService($reps);
        $data = $service->find($cateId);

        return json_decode($data, 'true')['title'];
    }
}
//取得業務分類
if (!function_exists('getBusTags')) {
    function getBusTags($tags)
    {
        if (empty($tags) || $tags == "") {
            return [];
        }
        $model = new \App\Models\BusinessTag();
        $reps = new \App\Repository\BusinessTagRepository($model);
        $service = new \App\Services\BusinessTagService($reps);
        return  $service->getBusinessTags($tags);
    }
}


//依MODELS設定  轉換 數據 
if (!function_exists('modelsAssociation')) {
    function modelsAssociation(array $setting)
    {
        $name = $setting['pluck'][0];
        $key = $setting['pluck'][1];
        $categories = [];
        $model = $setting[$setting['type']];
        $obj = new $model();
        $arraies = $obj->all();
        $categories[0] = 'Please Select';
        foreach ($arraies as $row) {
            $categories[$row->$key] = $row->$name;
        }
        return $categories;
    }
}

//INDEX 顯示頁 轉換 數據 
if (!function_exists('indexAssociaction')) {
    function indexAssociaction($setting, $id)
    {
        if (!empty($id)) {
            $model = $setting[$setting['type']];
            $obj = new $model();
            $model = $obj->find($id);
            if ($model) {
                $name = $setting['pluck'][0];
                return $model->$name;
            } else {
                return false;
            }
        } else {
            return false;
        }
    }
}


//INDEX 顯示頁 轉換 數據 
if (!function_exists('roleStringTraf')) {
    function roleStringTraf($roleName)
    {
        $str = explode("-", $roleName);
        return __("$str[0].title") . __("default.$str[1]");
    }
}


//INDEX 顯示頁 轉換 數據 
if (!function_exists('permissionDataCollect')) {
    function permissionDataCollect($permission)
    {
        $datas = [];
        foreach ($permission as $data) {
            $datas[$data['main']][$data['name']] =
                [
                    'id' => $data['id'],
                    'name' => $data['name'],
                ];
        }
        return $datas;
    }
}

//是否是圖片 
if (!function_exists('isImage')) {
    function isImage($filePath)
    {
        $imageExtensions = ['jpg', 'jpeg', 'gif', 'png', 'bmp', 'svg', 'svgz', 'cgm', 'djv', 'djvu', 'ico', 'ief', 'jpe', 'pbm', 'pgm', 'pnm', 'ppm', 'ras', 'rgb', 'tif', 'tiff', 'wbmp', 'xbm', 'xpm', 'xwd'];
        $explodeImage = explode('.', $filePath);
        $extension = end($explodeImage);
        if (in_array($extension, $imageExtensions)) {
            return true;
        } else {
            return false;
        }
    }
}

//判斷是否系統欄位
if (!function_exists('not_system')) {
    function not_system($settingTypeString)
    {
        $str = explode("|", $settingTypeString);
        if (count($str) > 1) {
            if ($str[1] == 'system') {
                return false;
            } else {
                return true;
            }
        } else {
            return true;
        }
    }
}

//判斷是否系統欄位
if (!function_exists('show_pics')) {
    function show_pics($setting, $obj)
    {
        if (isset($setting['association']['type'])) {
            $type = $setting['association']['type'];
            $model = $setting['association'][$type];
            $model = new $model();
            $entities = $model->where('model_id', $obj->id)->get();
            $imgs = [];
            foreach ($entities as $entity) {
                $imgs[$entity->id] = $entity->img;
            }
            return $imgs;
        } else {
            return false;
        }
    }
}

//市場標籤
if (!function_exists('marketTags')) {
    function marketTags($tags)
    {
        if ($tags) {
            $strings = explode(',', $tags);
            $model = new App\Models\BusinessTag();
            if (count($strings) >= 2) {
                return $model->whereIn('id', $strings)->get();
            } else {
                return $model->where('id', $tags)->get();
            }
        } else {
            return [];
        }
    }
}
//json 回傳第一個VALUE 
if (!function_exists('trafTitle')) {
    function trafTitle($json)
    {
        $array = json_decode($json, true);
        return array_shift($array);
    }
}

//json 回傳第一個VALUE 
if (!function_exists('inAryRtStr')) {
    function inAryRtStr($val, $ary, $str)
    {
        return in_array($val, $ary) ? $str : "";
    }
}

// 論譠密碼格式
if (!function_exists('customerPwd')) {
    function customerPwd($pwd, $salt)
    {
        return md5(md5($pwd) . $salt);
    }
}

if (!function_exists('delHtmlAttr')) {
    function delHtmlAttr($title, $type, $id, $around)
    {
        return "<b style=\"color:red;\" class=\"delattr\" data-title=\"" . $title . "\" data-type=\"$type\" data-id=\"" . $id . "\" data-around=\"$around\" >" .
            "刪除" . $title . "</b>  ";
    }
}
// html格式
if (!function_exists('htmlArrts')) {
    function htmlArrts($type, $attrs, $id)
    {
        $html = '';
        $attrs = json_decode($attrs, true);
        if ($type == 'text') {
            foreach ($attrs as $around => $attr) {
                foreach ($attr as $key => $title) {
                    $html .= $title . '<input type="text" name="' . $around . "_" . $key . '" />  ';
                }
                $html .= delHtmlAttr($title, $type, $id, $around);
            }
        } else {
            foreach ($attrs as $around => $attr) {
                $html .= '<div class="row mb-3">';
                $html .= '<label for="example-text-input" class="col-sm-2 col-form-label">' . $attr['title'] . '</label>';
                $html .= '<div class="col-sm-10 col-form-label">';
                foreach ($attr as $showKey => $row) {
                    if ($showKey == 'sub_titles') {
                        foreach ($row as $r => $cell) {
                            $html .= '<label style="margin-left:10px;">';
                            $html .= __("form.select") . $r . "  " . $cell;
                            $html .= "</label>  ";
                        }
                    }
                }
                $html .= delHtmlAttr($attr['title'], $type, $id, $around);
                $html .= "</div></div>";
            }
        }
        return $html;
    }
}

// html格式
if (!function_exists('htmlCheckBoxAssociation')) {
    function htmlCheckBoxAssociation($association, $name)
    {
        if (isset($association['hasOne'])) {
            $model = new $association['hasOne'];
            return $model = $model->where([$association['where']])->get();
        }
    }
}


if (!function_exists('getIndexAdIcon')) {
    function getIndexAdIcon()
    {
        $key = "adIcon";
        if (0) {
            return Redis::get($key);
        }
        $baseResp = new BaseRepository();
        $service = new BaseService($baseResp);
        $where = ['able' => 1, 'is_pop_ups' => 1];
        $obj = $service->getTableData('advertisings', $where, "ad_close_icon");
        if (isset($obj[0])) {
            $path = "/storage/" . $obj[0]->ad_close_icon;
            Redis::set($key, $path, 60 * 60);
            return $path;
        } else {
            return '/frontend/images/icon/ctrl-logo.svg';
        }
    }
}
// html格式
if (!function_exists('getMartetImgs')) {
    function getMartetImgs($id, $type)
    {
        $baseResp = new BaseRepository();
        $service = new BaseService($baseResp);
        $where = ['model_id' => $id, 'model_type' => $type];
        return $service->getTableData('advertising_imgs', $where, "*");
    }
}



// html radios格式
if (!function_exists('getRadios')) {
    function getRadios($association, $row)
    {
        if (isset($association['association']['hasOne'])) {
            $model = new $association['association']['hasOne']();
            $parentId = $association['association']['parentId'];
            $whereField = isset($association['association']['whereField']) ? $association['association']['whereField'] : 'parent_id';
            return $model->where($whereField, $row->$parentId)->get();
        }
    }
}

//postCreate
if (!function_exists('postCreate')) {
    function postCreate($created)
    {
        $min = 60;
        $hour = 60 * $min;
        $day = 24 * $hour;
        $sec = Carbon::now()->diffInSeconds($created);
        if ($sec < $min) {
            return Carbon::now()->diffInSeconds($created) . __('default.time.secs') . __('default.time.ago');
        } elseif ($sec > $min && $sec <= $hour) {
            return Carbon::now()->diffInMinutes($created) . __('default.time.mins') . __('default.time.ago');
        } elseif ($sec > $hour && $sec <= $day) {
            return Carbon::now()->diffInHours($created) . __('default.time.hours') . __('default.time.ago');
        } elseif ($sec > $day) {
            return Carbon::now()->diffInDays($created) . __('default.time.days') . __('default.time.ago');
        }
    }
}

//html產出的checkbox是否ckecked radio or checkbox
if (!function_exists('htmlIsChecked')) {
    function htmlIsChecked(string $find, string $modelVal)
    {
        return (strpos($modelVal, $find) >= 1) ? 1 : 0;
    }
}
