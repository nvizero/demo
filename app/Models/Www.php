<?php
namespace App\Models;
use Kyslik\ColumnSortable\Sortable;
class Www extends BaseModel
{
    /**
     * The attributes that are mass assignable.
     *	
     * @var array
     */
    use Sortable;
    protected $table = 'www';
    protected $fillable = [
         'qwe',
    ];

    public function tableFieldsSetting()
    {
        return  [
          'qwe' => [
               'type' => 'text',
               'required' => 0,
               'search' => [
                    'level' => 'like',
               ]
          ],
       ];
    }
}
