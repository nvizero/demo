<?php
namespace App\Models;

use Kyslik\ColumnSortable\Sortable;
use Illuminate\Support\Facades\DB;

class Getform extends BaseModel
{
    /**
     * The attributes that are mass assignable.
     *	
     * @var array
     */
    use Sortable;
    protected $table = 'getform';
    protected $fillable = [
    'product_id', 
    'product_name', 
    'product_serial', 
    ];

    public function product()
    {
      return $this->hasOne('App\Models\Product');
    }

    public function getAllField()
    {
      $res = DB::table('aforms')->orderBy('sort','asc')->get();
      $set = [];
      foreach($res as $i =>$row){
        $set[$row->val] = [
            'type' => 'text',
            'required' => true,
            'search' => [
                  'level' => 'like',
                ]
            ]; 
      }
      return $set;
    }

    public function tableFieldsSetting()
    {
        $init = [
            'product_id' => [
                'type' => 'text',
                'required' => true,
                'search' => [
                    'level' => 'like',
                ] 
            ],            
            'product_name' => [
                'type' => 'text',
                'required' => true,
                'search' => [
                    'level' => 'like',
                ] 
            ],            
            'product_serial' => [
                'type' => 'text',
                'required' => true,
                'search' => [
                    'level' => 'like',
                ] 
            ],            
        ];
        return array_merge($init , self::getAllField());
    }
}
