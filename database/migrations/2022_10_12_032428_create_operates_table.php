<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOperatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('operates', function (Blueprint $table) {
            $table->id();
            $table->string('crud');                        
            $table->text('table'); 
            $table->integer('table_id')->nullable();
            $table->string('username')->nullable();
            $table->integer('user_id')->comment('管理者ID')->nullable();
            $table->integer('customer_id')->comment('用戶ID')->nullable();            
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
        Schema::dropIfExists('operates');
    }
}
