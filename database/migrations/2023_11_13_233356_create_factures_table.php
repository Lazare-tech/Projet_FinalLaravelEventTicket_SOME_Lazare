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
        Schema::create('factures', function (Blueprint $table) {
            $table->id();
            $table->string('numero_facture');
            $table->integer('montant');
            $table->dateTime('date_facture');
            $table->string('moyen_paiement');
            $table->timestamps();
         
           $table->unsignedBigInteger('evenement_id');
           $table->foreign('evenement_id')->references('id')->on('evenements');
           //
           $table->unsignedBigInteger('utilisateur_id');
            $table->foreign('utilisateur_id')->references('id')->on('users');

           
           
           
           
           
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('factures');
    }
};
