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
          $table->string('photo');
            $table->integer('prix');
            $table->timestamps();
            // Clé étrangère vers evenements
$table->unsignedBigInteger('evenement_id');
$table->foreign('evenement_id')->references('id')->on('evenements')->onDelete('cascade');
//
$table->unsignedBigInteger('typebillet_id');
$table->foreign('typebillet_id')->references('id')->on('typebillets')->onDelete('cascade');

          
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
