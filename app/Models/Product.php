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
         'content','tags','imgs','title','img',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }

    public function images()
    {
       return $this->morphMany(Image::class, 'model');
    }

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
          'img' => [
               'type' => 'file',
               'required' => 0,
          ],
          'qrcode' => [
               'type' => 'file',
               'required' => 0,
          ],
          'parse_qrcode' => [
               'type' => 'no',
               'required' => 0,
          ],

          'serial' => [
               'type' => 'text',
               'required' => 1,
          ],
          'is_flag' => [
               'type' => 'number',
               'required' => 0,
          ],
          'is_hot' => [
               'type' => 'checkbox',
               'required' => 0,
          ],
          'tags' => [
               'type' => 'tag-it',
               'required' => 0,
          ],
          'files' => [
              'type' => 'files',
              'required' => false,
              'index_show' => false,
              'association' => [
                  'bool' => true,
                  'hasMany' => "\App\Models\Image",
                  'fromModel' => "\App\Models\Product",
                  'type' => "hasMany",
                  'pluck' => ['img', 'id']
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
