<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('title')->index;
            $table->string('img');
            $table->integer('category_id');
            $table->text('content');    
            $table->integer('user_id')->comment('管理員ID');
            $table->string('username')->comment('管理員名稱');
            $table->integer('sort')->default(0)->comment('排序');
            $table->index(['id', 'title']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
}
