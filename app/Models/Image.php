<?php

namespace App\Models;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Image extends BaseModel
{
    // use Sortable;
    
    protected $table = 'images';
    protected $fillable = [
        'model_type', 'model_id', 'img'
    ];

    public function Prouct()
    {
        return $this->belongsTo('App\Models\Prouct');
    }

    public function post()
    {
        return $this->belongsTo('App\Models\Post');
    }

    public function imageable()
    {
        return $this->morphTo();
    }
}
