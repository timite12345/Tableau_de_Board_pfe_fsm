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
        Schema::create('demandetransports', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string("condTransp");
            $table->string("nom");
            $table->string("prenom");
            $table->string("email");
            $table->date("date_Dep");
            $table->string("adresse_Dep");
            $table->string("adresse_Arriv");
            $table->string("commentaires");
            $table->boolean("estUrgent")->default(false);
            $table->boolean("estFacture")->default(true);
            $table->unsignedBigInteger("refEtb");
            $table->unsignedBigInteger("idMalade");
            $table->unsignedBigInteger("idChauffeur");
            $table->foreign('refEtb')->references('id')->on('etbsantes')->onDelete('restrict')->onUpdate('restrict');
            $table->foreign('idMalade')->references('id')->on('personne_malades')->onDelete('restrict')->onUpdate('restrict');
            $table->foreign('idChauffeur')->references('id')->on('chauffeurs')->onDelete('restrict')->onUpdate('restrict');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('demandetransports');
    }
};
