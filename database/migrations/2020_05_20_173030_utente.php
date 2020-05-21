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
			$table->bigIncrements('id');
            $table->string('username', 20)->unique();
            $table->string('email', 50)->unique();
            $table->string('nome', 20);
            $table->string('cognome', 20);
            $table->string('password', 255);
			$table->timestamp('email_verified_at')->nullable();
            $table->string('occupazione', 30)->nullable();
            $table->string('residenza', 25)->nullable();
            $table->date('data_nasc')->nullable();
            $table->string('privilegio',7)->default('cliente');
            $table->rememberToken();
            $table->timestamps();
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
