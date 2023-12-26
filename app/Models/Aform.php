<?php

namespace App\Models;
use Kyslik\ColumnSortable\Sortable;

class Aform extends BaseModel
{
    use Sortable;
    protected $table = 'aforms';
    protected $fillable = [
         'title','subtitle','content',
    ];

   public function tableFieldsSetting()
    {
        $options = [
                    'input' => '文字', 
                    'textarea' => '輸入框', 
                    'checkbox' => '單選',
                    'radio' => '多選',
                  ];

        return  [
          'show_name' => [
               'type' => 'text',
               'required' => 1,
          ],
          'cate' => [
               'type' => 'select',
               'isData'=>true,
               'required' => 1,
               'data'=>$options 
          ],
          'key' => [
               'type' => 'text',
               'required' => 0,
               'note' => '輸入文字以,區分',
          ],
          'sort' => [
               'type' => 'number',
               'required' => 0,
          ],
       ];
    }
}
