<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;

class PostCategory extends BaseModel
{
    use Sortable;
    protected $table = 'post_cates';
    /**
     * The attributes that are mass assignable.
     *	
     * @var array
     */
    protected $fillable = [
        'title', 'able', 'sort'
    ];


    /**
     * 
     */
    public function tableFieldsSetting()
    {
        return  [
            'title' => [
                'type' => 'text',
                'required' => true,
                'search' => true,
                'search' => [
                    'level' => 'like'
                ],
            ],
            'parent_id' => [
                  'type' => 'select',
                  'required' => 0,
                  'search' => [
                      'level' => 'equal'
                  ],
                  'association' => [
                      'bool' => true,
                      'hasOne' => "\App\Models\PostCategory",
                      'type' => "hasOne",
                      'pluck' => ['title', 'id']
                  ]
            ],
            'able' => [
                'type' => 'checkbox',
                'required' => false,
                'search' => true,
            ],
            'sort' => [
                'type' => 'text',
                'required' => true,
                'search' => true,
            ],
        ];
    }
    public function childs() {
        return $this->hasMany('App\Models\PostCategory','parent_id','id') ;
    }
}
