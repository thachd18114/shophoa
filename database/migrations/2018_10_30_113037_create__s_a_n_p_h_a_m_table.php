<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSANPHAMTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('SANPHAM', function (Blueprint $table) {
            $table->engine='InnoDB';
            $table->bigIncrements('sp_ma');
            $table->string('sp_ten', 190);
            $table->integer('sp_giaGoc')->default('0');
            $table->integer('sp_giaBan')->default('0');
            $table->string('hinh', 200);
            $table->text('sp_thongtin');
            $table->string('danhGia', 50);
            $table->timestamp('sp_taoMoi')->default(DB::raw("current_timestamp"));
            $table->timestamp('sp_capNhat')->default(DB::raw("current_timestamp"));
            $table->unsignedTinyInteger('sp_trangThai')->default('2');
           // $table->smallIncrements('l_ma');
          //  $table->foreign('l_ma')->references('l_ma')->on ('loai')->onUpdate('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('SANPHAM');
    }
}
