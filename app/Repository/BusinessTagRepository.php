<?php

namespace App\Repository;

use App\Models\BusinessTag;

class BusinessTagRepository
{
    //find
    public function getAll()
    {
        return BusinessTag::all();
    }

    //find
    public function whereIn($ids, $select = '*')
    {
        return BusinessTag::select($select)->whereIn('id', $ids)->get();
    }

}
