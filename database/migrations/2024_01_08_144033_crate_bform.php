<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CrateBform extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bforms', function (Blueprint $table) {
            $table->id();
            $table->string("show_name");
            $table->string("cate");
            $table->string("key")->nullable();
            $table->integer('sort')->nullable()->comment('排序');
            $table->integer('is_required')->nullable()->comment('必填');
            $table->integer('size')->nullable();
            $table->string('val')->nullable();
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
        Schema::dropIfExists('bforms');
    }
}
