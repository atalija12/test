<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableKorisnici extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('table_korisnici', function (Blueprint $table) {
            $table->id('id');
            $table->string('ime_prezime');
            $table->integer('broj_telefona');
            $table->text('adresa');
            $table->string('grad');
            $table->date('datum_rodjena');
            $table->string('password');
            $table->bigInteger('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');
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
        Schema::dropIfExists('table_korisnici');
    }
}
