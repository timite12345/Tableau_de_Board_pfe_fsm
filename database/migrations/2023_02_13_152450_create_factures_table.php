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
        Schema::create('factures', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string("nom");
            $table->unsignedBigInteger("idMalade");
            $table->unsignedBigInteger("refEtb");
            $table->unsignedBigInteger("idDemande");
            $table->foreign('idMalade')->references('id')->on('personne_malades')->onDelete('restrict')->onUpdate('restrict');
            $table->foreign('refEtb')->references('id')->on('etbsantes')->onDelete('restrict')->onUpdate('restrict');
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
        Schema::dropIfExists('factures');
    }
};
