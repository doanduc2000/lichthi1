<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePhongthi extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('phongthi', function (Blueprint $table) {
            $table->increments('ID_PhongThi');
            $table->string('TenHocPhan');
            $table->date('NgayThi');
            $table->string('CaThi');
            $table->integer('SoPhong');
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
        Schema::dropIfExists('phongthi');
    }
}
