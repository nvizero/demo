<?php

namespace App\Models;

use App\User;
use Kyslik\ColumnSortable\Sortable;

 
class PagePhoto extends BaseModel
{
    /**
     * The attributes that are mass assignable.
     *	
     * @var array
     */
    use Sortable;
    protected $table = 'page_photos';
    protected $fillable = [
        'name', 'key', 'img'
    ];

    public function tableFieldsSetting()
    {
      return  [
          'name' => [
              'type' => 'text',
              'required' => true,
          ],           
          'key' => [
              'type' => 'text',
              'required' => true,
          ],           
          'img' => [
              'type' => 'file',                
              'required' => true,
              'multi' => true,
              'search' => false,
          ],
      ];
    }
}
