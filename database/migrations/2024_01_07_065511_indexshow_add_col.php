<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class IndexshowAddCol extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
     Schema::table('index_show', function(Blueprint $table) {
            $table->string('subtitle')->nullable();
      });

     Schema::table('posts', function(Blueprint $table) {
            $table->text('saylittle')->nullable();
            $table->string('subtitle')->nullable();
            $table->date('start')->nullable();
            $table->date('end')->nullable();
            $table->integer('indexshow')->nullable();
      });

     Schema::table('post_cates', function(Blueprint $table) {
            $table->text('saylittle')->nullable();
      });

     Schema::table('products', function(Blueprint $table) {
            $table->integer('hot')->nullable();
            $table->integer('is_index')->nullable();
            $table->string('product_qrcode')->nullable();
      });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {

     Schema::table('index_show', function(Blueprint $table) {
            $table->dropColumn('subtitle');
      });

     Schema::table('post_cates', function(Blueprint $table) {
            $table->dropColumn('saylittle');
      });

     Schema::table('posts', function(Blueprint $table) {
            $table->dropColumn('saylittle');
            $table->dropColumn('subtitle');
            $table->dropColumn('indexshow');
            $table->dropColumn('start');
            $table->dropColumn('end');
      });

     Schema::table('products', function(Blueprint $table) {
            $table->dropColumn('hot')->nullable();
            $table->dropColumn('product_qrcode')->nullable();
            $table->dropColumn('is_index')->nullable();
      });
    }
}
