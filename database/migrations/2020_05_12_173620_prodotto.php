<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Prodotto extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {

        Schema::create('prodotto', function (Blueprint $table) {
            $table->bigIncrements('codice');
            $table->string('desc_breve', 100);
            $table->string('desc_esaustiva', 3000);
            $table->float('prezzo')->unsigned();
            $table->integer('sconto')->unsigned()->nullable();
            $table->text('immagine')->nullable();
            $table->string('nome', 50);
            $table->string('marca', 30);
            $table->bigInteger('sottocategoria')->unsigned()->index();
            $table->foreign('sottocategoria')->references('id')->on('sottocategoria')->onUpdate('cascade')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('prodotto');
    }

}
