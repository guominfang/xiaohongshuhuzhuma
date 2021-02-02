<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ShuDuiZhangHuZhuCode extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shu_dui_zhang_hu_zhu_code', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('gzh_code');
            $table->string('count');
            $table->string('code');
            $table->integer('time')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('shu_dui_zhang_hu_zhu_code');
    }
}
