<?php

namespace App\Models;
use Kyslik\ColumnSortable\Sortable;
class Tag extends BaseModel
{
    use Sortable;
    protected $table = 'tags';
    protected $fillable = [
         'name','count'
    ];
}
