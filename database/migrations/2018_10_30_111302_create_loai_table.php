<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLoaiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('loai', function (Blueprint $table) {
            $table->smallIncrements('l_ma');
            $table->string('l_ten',50);
            $table->timestamp('l_taoMoi')->default(DB::raw("current_timestamp"));
            $table->timestamp('l_capnhat')->default(DB::raw("current_timestamp"));
            $table->tinyInteger('l_trangthai')->default('2');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('loai');
    }
}
