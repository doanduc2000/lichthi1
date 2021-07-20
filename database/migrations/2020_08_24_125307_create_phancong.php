<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePhancong extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('phancong', function (Blueprint $table) {
            $table->increments('ID_PhanCong');
            $table->integer('ID_LichThi');
            $table->string('HocPhan');
            $table->date('NgayThi');
            $table->string('CaThi');
            $table->string('GiaoVien');
            $table->string('GhiChu');
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
        Schema::dropIfExists('phancong');
    }
}
