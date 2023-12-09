<?php
namespace App\Models;
use Kyslik\ColumnSortable\Sortable;
class IndexShow extends BaseModel
{
    /**
     * The attributes that are mass assignable.
     *	
     * @var array
     */
    use Sortable;
    protected $table = 'index_show';
    protected $fillable = [
         'title','subtitle','content',
    ];

    public function tableFieldsSetting()
    {
        return  [
          'title' => [
               'type' => 'text',
               'required' => 1,
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
          'link' => [
               'type' => 'text',
               'required' => 1,
               'search' => [
                    'level' => 'like',
               ]
          ],
          'hot' => [
               'type' => 'text',
               'required' => 1,
               'search' => [
                    'level' => 'like',
               ]
          ],
          'sort' => [
               'type' => 'number',
               'required' => 1,
               'search' => [
                    'level' => 'like',
               ]
          ],
          'is_flag' => [
            'type' => 'checkbox',             
               'required' => 0,
          ],
          'content' => [
               'type' => 'ckeditor',
               'required' => 1,
               'search' => [
                    'level' => 'like',
               ]
          ],
       ];
    }
}
