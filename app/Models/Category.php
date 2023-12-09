<?php
namespace App\Models;
use Kyslik\ColumnSortable\Sortable;

class Category extends BaseModel
{
    use Sortable;
    protected $table = 'categories';

    public $fillable = ['title','parent_id'];

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
          'parent_id' => [
                'type' => 'select',
                'required' => 0,
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
       ];
    }

    /**
     * Get the index name for the model.
     *
     * @return string
    */
    public function childs() {
        return $this->hasMany('App\Category','parent_id','id') ;
    }
}
