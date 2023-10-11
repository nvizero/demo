<?php

namespace App\Services;

use App\Repository\BusinessCategoryRepository;
use Illuminate\Support\Facades\Redis;

class BusinessCategoryService
{
    const REDIS_KEY = 'Bussiness';
    const ttl = 60 * 60 * 3;
    function __construct(BusinessCategoryRepository $businessCategoryRepository)
    {
        $this->businessCategoryRepository = $businessCategoryRepository;
    }
    //取得 
    public function find(int $id)
    {
        $obj = $this->businessCategoryRepository->find($id);
        $key = self::REDIS_KEY . ":" . $obj->id;
        if (Redis::exists($key)) {
            return Redis::get($key);
        }
        Redis::set($key, json_encode($obj->toArray()), self::ttl);
        return json_encode($obj->toArray());
    }

    //取得 
    public function getChind(int $parent_id)
    {
        return $this->businessCategoryRepository->getChildren($parent_id);
    }
    //取得 第一層
    public function getParent()
    {
        $key = self::REDIS_KEY . ":categories" ;
        if (Redis::exists($key)) {
            return Redis::get($key);
        }
        $res = $this->businessCategoryRepository->getParent();        
        Redis::get($key , json_encode($res->toArray()),86400);
        return $res->toArray();

    }
}
