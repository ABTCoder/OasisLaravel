<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Utente extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {

        Schema::create('utente', function (Blueprint $table) {
            $table->string('username', 20);
            $table->primary('username');
            $table->string('email', 50)->unique();
            $table->string('nome', 20);
            $table->string('cognome', 20);
            $table->string('password', 25);
            $table->string('occupazione', 30)->nullable();
            $table->string('residenza', 25)->nullable();
            $table->date('data_nasc')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('utente');
    }

}
