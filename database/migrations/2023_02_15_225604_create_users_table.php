<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->foreignId('role_id')->default(2);
            $table->string('numero_licence')->nullable();
            $table->enum('type_licence', ['Loisir', 'Compétition', 'Junior'])->nullable();
            $table->enum('categorie', ['Benjamin', 'Minime', 'Cadet', 'Junior', 'Adulte', 'Sénior', 'Vétéran 1', 'Vétéran 2', 'Vétéran 3']);
            $table->string('nom');
            $table->string('prenom');
            $table->date('date_naissance');
            $table->string('adresse_ligne_1');
            $table->string('adresse_ligne_2')->nullable();
            $table->string('code_postal');
            $table->string('commune');
            $table->string('tel');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->default(now());
            $table->string('password');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
};
