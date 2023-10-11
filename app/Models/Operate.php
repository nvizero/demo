<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;
class Operate extends Model
{
    use Sortable;
    protected $table = 'operates';
    /**
     * The attributes that are mass assignable.
     *	
     * @var array
     */


    protected $fillable = [
        'username',    'user_id',    'table_id',    'crud',    'table',
    ];

    /**
     * 
     */
    public function tableFieldsSetting()
    {
        return  [
            
            'table' => [
                'type' => 'text|system',
                'required' => true                
            ],
            'table_id' => [
                'type' => 'number',
                'required' => true,
                'search' => true,
            ],
            'crud' => [
                'type' => 'text',
                'required' => true,                
            ],
            'username' => [
                'type' => 'text',
                'required' => true,
                'search' => true,
                'search' => [
                    'level' => 'like'
                ],
            ],
            'user_id' => [
                'type' => 'text',
                'required' => false,
                'search' => true,
            ],
            
        ];
    }
}
