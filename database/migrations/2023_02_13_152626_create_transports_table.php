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
        Schema::create('transports', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->integer("idTransport");
            $table->date("heureDeb");
            $table->date("heureFin");
            $table->string("commentaire");
            $table->unsignedBigInteger("idChauffeur");
            $table->unsignedBigInteger("idDemande");
            $table->foreign('idChauffeur')->references('id')->on('chauffeurs')->onDelete('restrict')->onUpdate('restrict');
            $table->foreign('idDemande')->references('id')->on('demandetransports')->onDelete('restrict')->onUpdate('restrict');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transports');
    }
};
