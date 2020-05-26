<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Sottocategoria extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('sottocategoria', function (Blueprint $table) {
            $table->string('nome', 30);
            $table->bigIncrements('id');
            $table->string('categoria',30)->index();
            $table->foreign('categoria')->references('id')->on('categoria')->onUpdate('cascade')->onDelete('restrict');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('sottocategoria');
    }

}
