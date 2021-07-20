<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCtlichthi extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ctlichthi', function (Blueprint $table) {
            $table->increments('ID_CTLichThi');
            $table->integer('ID_LichThi');
            $table->integer('ID_Phong');
            $table->integer('ID_GiaoVien');
            $table->string('GiaoVien1');
            $table->string('GiaoVien2');
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
        Schema::dropIfExists('ctlichthi');
    }
}
