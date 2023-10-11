<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redis;

class BaseModel extends Model
{


    //在儲存 或 修改 後     
    public static function boot()
    {
        parent::boot();


        self::creating(function ($model) {
            // ... code here
        });

        self::created(function ($model) {

            $data = [
                'username' => Auth::user() ? Auth::user()->username : 'system',
                'user_id' => Auth::user() ? Auth::user()->id : 0,
                'table_id' => $model->id,
                'crud' => "created",
                'table' => $model->table,
                'created_at' => date("y-m-d H:i:s"),
                'updated_at' => date("y-m-d H:i:s"),
            ];
            DB::table('operates')->insert($data);
        });

        self::updating(function ($model) {
            // ... code here
        });

        self::updated(function ($model) {
            $data = [
                'username' => Auth::user() ? Auth::user()->username : 'system',
                'user_id' => Auth::user() ? Auth::user()->id : 0,
                'table_id' => $model->id,
                'crud' => "updated",
                'table' => $model->table,
                'created_at' => date("y-m-d H:i:s"),
                'updated_at' => date("y-m-d H:i:s"),
            ];
            DB::table('operates')->insert($data);
        });

        self::deleting(function ($model) {
            // ... code here
        });

        self::deleted(function ($model) {
            $data = [
                'username' => Auth::user() ? Auth::user()->username : 'system',
                'user_id' => Auth::user() ? Auth::user()->id : 0,
                'table_id' => $model->id,
                'crud' => "deleted",
                'table' => $model->table,
                'created_at' => date("y-m-d H:i:s"),
                'updated_at' => date("y-m-d H:i:s"),
            ];
            DB::table('operates')->insert($data);
        });
    }
}
