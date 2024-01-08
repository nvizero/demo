<?php
namespace App\Models;

use Kyslik\ColumnSortable\Sortable;
use Illuminate\Support\Facades\DB;

class Getbform extends BaseModel
{
    /**
     * The attributes that are mass assignable.
     *	
     * @var array
     */
    use Sortable;
    protected $table = 'get_bforms';
    protected $fillable = [
    'product_id', 
    'product_name', 
    'product_serial', 
    ];


    public function getAllField()
    {
      $res = DB::table('bforms')->orderBy('sort','asc')->get();
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
        return  self::getAllField();
    }
}
