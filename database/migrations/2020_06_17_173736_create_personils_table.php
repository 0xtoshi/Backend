<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePersonilsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personils', function (Blueprint $table) {
            $table->id();
            $table->string('jabatan')->length(100);
            $table->integer('gaji')->length(25);
            $table->integer('jumlah')->length(11);
            $table->bigInteger('id_bq')->unsigned();
            $table->foreign('id_bq')->references('id')->on('bqs')->onDelete('cascade');
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
        Schema::dropIfExists('personils');
    }
}
