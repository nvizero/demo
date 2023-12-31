<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;

class PostCategory extends BaseModel
{
    use Sortable;
    protected $table = 'post_categories';
    /**
     * The attributes that are mass assignable.
     *	
     * @var array
     */
    protected $fillable = [
        'name', 'able', 'sort'
    ];

    /**
     * 获取新闻分类下的帖子
     *
     * @return void
     */
    public function posts()
    {
        return $this->hasMany('App\Models\Post', 'category_id', 'id')->orderBy('id', 'desc');
    }

    /**
     * 
     */
    public function tableFieldsSetting()
    {
        return  [
            'name' => [
                'type' => 'text',
                'required' => true,
                'search' => true,
                'search' => [
                    'level' => 'like'
                ],
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
}
