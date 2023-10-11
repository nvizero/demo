<?php

namespace App\Repository;

use App\Models\Business;

class BusinessRepository
{
    function __construct(Business $business)
    {
        $this->business =  $business;
    }


    //取資料 
    public function getData($where, $sort, $page)
    {
        $model =  $this->business;
        if (isset($where['title'])) {
            foreach ($where as $cont => $val) {
                if (!empty($val)) {
                    if ($cont == 'title') {
                        $wheres[] = [$cont, 'like', "%{$val}%"];
                    } else {
                        $wheres[] = [$cont, '=', $val];
                    }
                }
            }            
            $model = $model->where($wheres);
        } else {
            foreach ($where as $cont => $val) {
                if (!empty($val)) {
                    $model = $model->where([$cont => $val]);
                }
            }
        }
        return $model->orderBy($sort[0], $sort[1])->paginate($page);
    }

    public function find($id)
    {
        return $this->business->find($id);
    }
}
