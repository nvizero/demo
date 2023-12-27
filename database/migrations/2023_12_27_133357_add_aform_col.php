<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddAformCol extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::table('aforms', function(Blueprint $table) {
            $table->integer('size')->nullable();
            $table->string('val')->nullable();
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      Schema::table('aforms', function(Blueprint $table) {
            $table->dropColumn('val');
            $table->dropColumn('szie');
      });
    }
}
