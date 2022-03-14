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
        Schema::create('entreprises', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->string('siege');
            $table->integer('telephone')->unique();
            $table->date('date_creation');
            $table->string('registre',20)->unique();
            $table->string('ninea',15)->unique();
            $table->string('site')->nullable()->unique();
            $table->boolean('dispositif_formation')->default(false);
            $table->boolean('organigramme')->default(false);
            $table->boolean('contrat')->default(false);
            $table->foreignId('quartier_id')->constrained();
            // $table->unsignedBigInteger('quartier_id');
            // $table->foreign('quartier_id')->references('id')->on('quartiers');
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
        Schema::dropIfExists('entreprises');
    }
};
