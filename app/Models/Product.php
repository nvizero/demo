<?php
namespace App\Models;
use Kyslik\ColumnSortable\Sortable;
class Product extends BaseModel
{
    /**
     * The attributes that are mass assignable.
     *	
     * @var array
     */
    use Sortable;
    protected $table = 'products';
    protected $fillable = [
         'content','tags','imgs','title',
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
          'category_id' => [
              'type' => 'select',
              'required' => 'required|not_in:0',
              'search' => [
                  'level' => 'equal'
              ],
              'association' => [
                  'bool' => true,
                  'hasOne' => "\App\Models\Category",
                  'type' => "hasOne",
                  'pluck' => ['title', 'id']
              ]
          ],
          'serial' => [
               'type' => 'text',
               'required' => 1,
          ],
          'is_flag' => [
               'type' => 'number',
               'required' => 0,
          ],
          'tags' => [
               'type' => 'text',
               'required' => 0,
               'search' => [
                    'level' => 'like',
               ]
          ],
          'imgs' => [
               'type' => 'text',
               'required' => 0,
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
