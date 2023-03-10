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
        Schema::create('personne_malades', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->integer("idMalade");
            $table->unsignedBigInteger("idPersonne");
            $table->foreign('idPersonne')->references('id')->on('personnes')->onDelete('restrict')->onUpdate('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('personne_malades');
    }
};
