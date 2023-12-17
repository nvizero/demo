<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class PostCol extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::table('post_cates', function (Blueprint $table) {            
            $table->integer('able')->comment('啟用');
            $table->integer('sort')->comment('排序');
        });
        //
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
         Schema::table('post_cates', function (Blueprint $table) {            
            $table->dropColumn('able');
            $table->dropColumn('sort');
        });

    }
}
