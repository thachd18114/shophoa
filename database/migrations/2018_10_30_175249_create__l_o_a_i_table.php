<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLOAITable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('LOAI', function (Blueprint $table) {
            $table->engine="InnoDB";
            $table->smallIncrements('l_ma');
            $table->string('l_ten', 50);
            $table->timestamp('l_taoMoi')->default(DB::raw('CURRENT_TIMESTAMP'));;
            $table->timestamp('l_capNhat')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->unsignedTinyInteger('l_trangthai')->default('2');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('LOAI');
    }
}
