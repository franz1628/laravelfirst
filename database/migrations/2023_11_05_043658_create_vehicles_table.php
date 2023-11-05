<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('vehicle', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('idBrand');
            $table->foreign('idBrand')->references('id')->on('brand');
            $table->unsignedBigInteger('idDesign');
            $table->foreign('idDesign')->references('id')->on('design');
            $table->unsignedBigInteger('idPerson');
            $table->foreign('idPerson')->references('id')->on('person');
            $table->integer('km');
            $table->integer('state')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vehicles');
    }
};
