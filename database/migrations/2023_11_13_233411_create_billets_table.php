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
        Schema::create('billets', function (Blueprint $table) {
            $table->id();
            $table->string('type');
            $table->integer('prix');
            $table->integer('quantite');
            $table->boolean('disponibilite');
            $table->timestamps();
            // Clé étrangère vers evenements
$table->unsignedBigInteger('evenement_id');
$table->foreign('evenement_id')->references('id')->on('evenements')->onDelete('cascade');

          
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('billets');
    }
};
