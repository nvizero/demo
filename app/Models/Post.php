<?php

namespace App\Models;

use App\User;
use Kyslik\ColumnSortable\Sortable;

 
class Post extends BaseModel
{
    /**
     * The attributes that are mass assignable.
     *	
     * @var array
     */
    use Sortable;
    protected $table = 'posts';
    protected $fillable = [
        'title', 'category_id', 'content', 'sort', 'user_id', 'username' ,'img'
    ];

    /**
     * 一对多帖子分类下的帖子(反向)
     *
     * @return void
     */
    public function category()
    {
        return $this->belongsTo(PostCategory::class, 'category_id', 'id');
    }
    
    /**
     * 一对多帖子的评论
     *
     * @return void
     */
    public function comments()
    {
        return $this->hasMany(PostComment::class, 'post_id', 'id')->orderBy('id', 'desc');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function tableFieldsSetting()
    {
        return  [
            'title' => [
                'type' => 'text',
                'required' => true,
                'search' => [
                    'level' => 'like',
                ] 
            ],            
            'img' => [
                'type' => 'file',                
                'required' => true,
                'multi' => true,
                'search' => false,

            ],
            'tags' => [
                 'type' => 'tag-it',
                 'required' => 0,
            ],
            'sort' => [
                'type' => 'number',
                'required' => true,
                'search' =>  false,
            ],
            'is_flag' => [
                 'type' => 'checkbox',
                 'required' => 0,
            ],
            'category_id' => [
                'type' => 'select',
                'required' => 'required|not_in:0',
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
            'content' => [
                'type' => 'ckeditor',
                'required' => true,
                'search' => [
                    'level' => 'like'
                ],
            ],
            'user_id' => [
                'type' => 'system',
                'required' => true,
                'search' => [
                    'level' => 'equal'
                ],
                'index_show' => false
            ],
            'username' => [
                'type' => 'system',
                'required' => true,
                'index_show' => false,
                'search' => [
                    'level' => 'like'
                ],
            ],
            'created_at' => [
                'type' => 'datetime|system',
                'required' => false,
                'search' => [
                    'level' => 'between'
                ]
            ],

        ];
    }
}
