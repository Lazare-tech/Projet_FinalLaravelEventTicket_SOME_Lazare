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
        Schema::disableForeignKeyConstraints();  
        Schema::create('evenements', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->string('lieu');
            $table->Text('description');
            $table->mediumText('resume');
            $table->string('photo');
            $table->string('fuseau_horaire')->nullable();
            $table->dateTime('date_debut');
            $table->dateTime('date_fin');
            $table->timestamps();
            // Clés étrangères categorie
$table->unsignedBigInteger('categorie_id');
$table->foreign('categorie_id')->references('id')->on('categories')->onDelete('cascade');

 //cle evenement
 $table->unsignedBigInteger('agence_id');
 $table->foreign('agence_id')->references('id')->on('agences')->onDelete('cascade');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('evenements');
    }
};
