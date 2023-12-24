<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Cates3Col extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::table('categories', function (Blueprint $table) {            
            $table->string('subtitle')->nullable()->comment('層級');
            $table->string('img')->nullable()->comment('圖片');
            $table->text('content')->nullable()->comment('簡述');
        });

        Schema::table('about_categories', function (Blueprint $table) {            
            $table->string('subtitle')->nullable()->comment('層級');
            $table->string('img')->nullable()->comment('圖片');
            $table->text('content')->nullable()->comment('簡述');
        });

        Schema::table('post_cates', function (Blueprint $table) {            
            $table->string('subtitle')->nullable()->comment('層級');
            $table->string('img')->nullable()->comment('圖片');
            $table->text('content')->nullable()->comment('簡述');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('post_cates', function (Blueprint $table) {            
            $table->dropColumn('subtitle');
            $table->dropColumn('img');
            $table->dropColumn('content');
        });
        //
        Schema::table('about_categories', function (Blueprint $table) {            
            $table->dropColumn('subtitle');
            $table->dropColumn('img');
            $table->dropColumn('content');
        });
        Schema::table('categories', function (Blueprint $table) {            
            $table->dropColumn('subtitle');
            $table->dropColumn('img');
            $table->dropColumn('content');
        });
    }
}
