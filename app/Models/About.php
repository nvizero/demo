<?php
namespace App\Models;
use Kyslik\ColumnSortable\Sortable;
class About extends BaseModel
{
    /**
     * The attributes that are mass assignable.
     *	
     * @var array
     */
    use Sortable;
    protected $table = 'abouts';
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
          'subtitle' => [
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
          'able' => [
            'type' => 'checkbox',             
               'required' => 0,
          ],
      //about_category_id
          'about_category_id' => [
              'type' => 'select',
              'required' => 'required|not_in:0',
              'search' => [
                  'level' => 'equal'
              ],
              'association' => [
                  'bool' => true,
                  'hasOne' => "\App\Models\AboutCategory",
                  'type' => "hasOne",
                  'pluck' => ['name', 'id']
              ]
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
