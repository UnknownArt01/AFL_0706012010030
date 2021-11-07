<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTariansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tarians', function (Blueprint $table) {
            $table->id();
            $table->string('tarian_code');
            $table->string('tarian_name');
            $table->string('tipe_tarian');
            $table->bigInteger('pencipta_tari')->unsigned();
            $table->string('tanggal');
            $table->string('description');
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
        Schema::dropIfExists('tarians');
    }
}
