<?php

namespace App\Services;

use App\Repository\BaseRepository;
use Illuminate\Support\Facades\Redis;

class BaseService
{
    const ttl = 60 * 60 * 3; //三小時
    function __construct(BaseRepository $baseRepository)
    {
        $this->baseRepository = $baseRepository;
    }

    //取得
    public function find(string $table, int $id, $select = '*')
    {
        return $this->baseRepository->findTableData($table, $id, $select);
    }

    //減少
    public function reduce(string $table, int $id, $field )
    {
        $model = self::find( $table, $id);
        self::update($table, $id, [ $field=>$model->$field-1]);
        return true;
    }
    //累加
    public function accumulate(string $table, int $id, $field )
    {
        $model = self::find( $table, $id);
        self::update($table, $id, [ $field=>$model->$field+1]);
        return true;
    }

    //刪除
    public function delete(string $table, $where)
    {
        return $this->baseRepository->delete($table, $where);
    }

    //取得
    public function update(string $table, int $id, $updateData = [])
    {
        return $this->baseRepository->updateTableData($table, $id, $updateData);
    }

    //取得
    public function raw(string $sql)
    {
        return $this->baseRepository->sqlStore($sql);
    }
    //get table 資料
    public function getTableData(string $table, $where = '', $select = '', $sort = '', $page = 0)
    {
        $obj = $this->baseRepository->getTableData($table, $where, $select, $sort, $page);
        return $obj;
    }
    //get table 資料
    public function getTableOffset(string $table, $where = '', $select = '', $sort = '',  $offset = 0, $take = 1)
    {
        $obj = $this->baseRepository->getTableDataOffset($table, $where, $select, $sort, $offset, $take);
        return $obj;
    }

    #公用 SET REDIS
    public function pubSetRedis($key, $val, $ttl = self::ttl)
    {
        if (empty($val)) {
            return false;
        } else {
            if (Redis::exists($key)) {
                return Redis::get($key);
            }
            if (is_array($val)) {
                Redis::set($key, json_encode($val), $ttl);
            } else {
                if (is_object($val)) {
                    Redis::set($key, json_encode((array)$val), $ttl);
                }
                Redis::set($key, $val, $ttl);
            }
            return true;
        }
    }
}
