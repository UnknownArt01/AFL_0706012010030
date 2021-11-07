<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePenciptasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('penciptas', function (Blueprint $table) {
            $table->id();
            $table->string('pencipta_code');
            $table->string('pencipta_name');
            $table->string('daerah_asal');
            $table->string('TTL');
            $table->text('description_pencipta');
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
        Schema::dropIfExists('penciptas');
    }
}
