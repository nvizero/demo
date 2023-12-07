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
          'content' => [
               'type' => 'ckeditor',
               'required' => 1,
               'search' => [
                    'level' => 'like',
               ]
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
          'title' => [
               'type' => 'text',
               'required' => 1,
               'search' => [
                    'level' => 'like',
               ]
          ],
       ];
    }
}
