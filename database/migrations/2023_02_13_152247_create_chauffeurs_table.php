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
        Schema::create('chauffeurs', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->boolean("estDisponibl")->default(true);
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
        Schema::dropIfExists('chauffeurs');
    }
};
