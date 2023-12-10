<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColAboutCate2 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::table('abouts', function (Blueprint $table) {            
            $table->integer('sort')->comment('排序');
            $table->integer('able')->comment('開關');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('abouts', function (Blueprint $table) {            
            $table->dropColumn('able');
            $table->dropColumn('sort');
        });
        //
    }
}
