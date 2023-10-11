<?php

namespace App\Services;

use App\Repository\BusinessRepository;
use App\Services\BaseService;
use Illuminate\Support\Facades\Redis;

class BusinessService
{
    const REDIS_KEY = 'BaseService';
    const ttl = 60 * 60;
    function __construct(BaseService $baseService, BusinessRepository $businessRepository)
    {
        $this->baseService = $baseService;
        $this->businessRepository = $businessRepository;
    }
    //取得 business imgs
    public function getImgs(int $businessId)
    {
        $table = 'advertising_imgs';
        $modelType = '\App\Models\Business';
        $where = ['model_type' => $modelType, 'model_id' => $businessId];
        $select = ['id', 'img'];
        $key = self::REDIS_KEY . ":" . $table . ":" . $businessId;
        $data = $this->baseService->pubSetRedis($key, '', self::ttl);
        if ($data) {
            return json_decode($data);
        } else {
            $data = $this->baseService->getTableData($table, $where, $select);
            $this->baseService->pubSetRedis($key, $data->toArray(), self::ttl);
            return $data->toArray();
        }
    }

    //取得 business imgs
    public function getBusinesses($where,  $sort, $page)
    {
        return $this->businessRepository->getData($where,  $sort, $page);
    }
    //上一个 or 下一个 title
    public function getPreNextHeader($id)
    {
        $titles['prev'] = null;
        $titles['next'] = null;
        $table = 'businesses';
        $select = ['id', 'title'];
        $sort = ['id', 'asc'];
        if ($id == 1) {
            $where = ['id', "!=", $id];
            $obj = $this->baseService->getTableOffset($table, $where, $select, $sort,  0, 1);
            if ($obj) {
                $titles['next'] = $obj[0];
            }
        } else {
            $where = ['id', "!=", $id];
            $obj = $this->baseService->getTableOffset($table, $where, $select, $sort,  $id - 2, 2);
            if ($obj) {
                $titles['prev'] = isset($obj[0]) ? $obj[0] : null;
                $titles['next'] = isset($obj[1]) ? $obj[1] : null;
            }
        }
        return $titles;
    }

    //業務表單
    public function htmlAttribs($designData, string $attrs, string $type)
    {        
        if ($type == 'text') {
            $objs = json_decode($designData->text_attrs, true);
            $data = ['html' => $objs, 'explode' => explode(',', $attrs)];
            return $data;
        } elseif ($type == 'checkbox' || $type == 'radio') {
            $exAttrs = explode(',', $attrs);
            $fieldName = $type . "_attrs";
            $objs = json_decode($designData->$fieldName, true);
            $output = [];

            if ($type == 'radio') {
                //如果是單選
                foreach ($objs as $around => $obj) {
                    $mapStr = $exAttrs[$around];                    
                    $maxStr = explode('_', $mapStr);                                        
                    $output[] = ['title' => $objs[$around]['title'], 'show' => $maxStr[1]];                    
                    
                }
            } elseif ($type == 'checkbox') {
                //如果是單選
                $exAttrs = explode(',', $attrs);
                $fieldName = $type . "_attrs";
                $objs = json_decode($designData->$fieldName, true);
                foreach ($objs as $around => $obj) {
                    foreach ($exAttrs as $key => $val) {
                        $maxStr = explode("_", $val);
                        
                        if (intval($maxStr[0]) == $around) {
                            if (isset($maxStr[1])) {
                                $output[$around]['sub_titles'][] = $maxStr[1];
                            }
                        }
                    }
                    $output[$around]['title'] = $objs[$around]['title'];
                }
            }

            return $output;
        }
    }
}
