<?php

namespace App\Models;
use Kyslik\ColumnSortable\Sortable;

class Bform extends BaseModel
{
    use Sortable;
    protected $table = 'bforms';
    protected $fillable = [
         'title','subtitle','content',
    ];

   public function tableFieldsSetting()
    {
        $options = [
                    'input' => '文字', 
                    'textarea' => '輸入框', 
                    'radio' => '單選',
                    'checkbox' => '多選',
                  ];

        return  [
          'show_name' => [
               'type' => 'text',
               'required' => 1,
          ],
          'val' => [
               'type' => 'text',
               'required' => 'required|unique:aforms,val',
                
               'note' => '輸入英文',
          ],
          'size' => [
               'type' => 'number',
               'isData'=>true,
               'required' => 1,
               'note' => '輸入1到12',
          ],
          'cate' => [
               'type' => 'select',
               'isData'=>true,
               'required' => 1,
               'data'=> $options 
          ],
          'is_required' => [
               'type' => 'checkbox',
               'required' => 1,
          ],
          'key' => [
               'type' => 'text',
               'required' => 0,
               'note' => '輸入文字以,區分(多選,單選才有用)',
          ],
          'sort' => [
               'type' => 'number',
               'required' => 0,
          ],
       ];
    }
}