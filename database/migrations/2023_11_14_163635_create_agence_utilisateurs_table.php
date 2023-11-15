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
        Schema::create('agence_utilisateurs', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('agence_id');
            $table->unsignedBigInteger('utilisateur_id');
            $table->string('type_utilisateur'); // Champ polymorphique
            $table->timestamps();

            $table->foreign('agence_id')->references('id')->on('agences')->onDelete('cascade');
            $table->foreign('utilisateur_id')->references('id')->on('users')->onDelete('cascade');
    
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('agence_utilisateurs');
    }
};
