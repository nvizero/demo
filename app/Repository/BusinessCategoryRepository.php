<?php

namespace App\Repository;

use App\Models\BusinessCategory;

class BusinessCategoryRepository
{
    function __construct(BusinessCategory $businessCategory)
    {
        $this->businessCategory =  $businessCategory;
    }

    public function getChildren($pid)
    {
        return $this->businessCategory->select(['title' , 'id'])->where('parent_id', $pid)->get();
    }

    public function getParent()
    {
        return $this->businessCategory->select(['title' , 'id'])->where('parent_id', 0)->get();
    }

    public function find($id)
    {
        return $this->businessCategory->find($id);
    }

    
}
