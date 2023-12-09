<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumn2Posts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('posts', function (Blueprint $table) {            
            $table->integer('is_flag')->comment('首頁開關');
            $table->string('serial')->comment('產品序號');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('postts', function (Blueprint $table) {            
            $table->dropColumn('is_flag');
            $table->dropColumn('serial');
        });
    }
}
