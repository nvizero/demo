<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColIndexShow extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('index_show', function (Blueprint $table) {            
            $table->string('hot')->comment('hot');
            $table->string('link')->comment('url link');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::table('index_show', function (Blueprint $table) {            
            $table->dropColumn('hot');
            $table->dropColumn('link');
        });
    }
}
