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
        Schema::create('etbsantes', function (Blueprint $table) {
            $table->id();
            $table->string("refEtb");
            $table->string("nom");
            $table->string("adresseEtb");
            $table->string("email");
            $table->string("tel")->unique();
            $table->string("estValide")->default('true');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('etbsantes');
    }
};
