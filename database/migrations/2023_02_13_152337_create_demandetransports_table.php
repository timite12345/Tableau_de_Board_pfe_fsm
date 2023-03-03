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
            $table->date("date_Dep");
            $table->string("adresse_Dep");
            $table->string("adresse_Arriv");
            $table->boolean("estUrgent")->default(false);
            $table->boolean("estTraite")->default(false);
            $table->boolean("estFacturé")->default(false);
            $table->unsignedBigInteger("refEtb");
            $table->unsignedBigInteger("idMalade");
            $table->foreign('refEtb')->references('id')->on('etbsantes')->onDelete('restrict')->onUpdate('restrict');
            $table->foreign('idMalade')->references('id')->on('personne_malades')->onDelete('restrict')->onUpdate('restrict');

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
