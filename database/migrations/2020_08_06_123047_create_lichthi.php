<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLichthi extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lichthi', function (Blueprint $table) {
            $table->increments('ID_LichThi');
            $table->string('MaHocPhan');
			$table->datetime('NgayThi');
			$table->time('ThoiGianThi');
            $table->string('CaThi');
            $table->integer('SoPhong');
            $table->integer('SoGiaoVien');
            $table->integer('SoSinhVien');
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
        Schema::dropIfExists('lichthi');
    }
}
