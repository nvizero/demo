<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Prod2Col extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('products', function (Blueprint $table) {            
            $table->string('qrcode')->nullable()->comment('qrcode');
            $table->string('parse_qrcode')->nullable()->comment('解析後的qrcode');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('products', function (Blueprint $table) {            
            $table->dropColumn('qrcode');
            $table->dropColumn('parse_qrcode');
        });
    }
}
