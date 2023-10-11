<?php

namespace App\Services;


use App\Repository\BusinessTagRepository;
use Illuminate\Support\Facades\Redis;

class BusinessTagService
{
    const REDIS_KEY = 'BusTags';
    const ttl = 60 * 60 * 3;

    function __construct(
        BusinessTagRepository $businessTagRepository
    )
    {
        $this->businessTagRepository = $businessTagRepository;
    }


    //取得all
    public function getAll()
    {
        return $this->businessTagRepository->getAll();
    }

    //取得all
    public function getBusinessTags(string $tags)
    {
        $ids = explode(',', $tags);
        unset($ids[0]);
        $values = array_values($ids);

        $rKey = implode("", $values);
        $key = self::REDIS_KEY . ":" . $rKey;
        if (Redis::exists($key)) {
            return json_decode(Redis::get($key),true);
        }
        $obj = $this->businessTagRepository->whereIn($ids, ['id', 'name']);
        Redis::set($key, json_encode($obj->toArray()), self::ttl);
        return $obj->toArray();
    }

}
