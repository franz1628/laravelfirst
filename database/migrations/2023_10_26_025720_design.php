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
        Schema::create('design', function (Blueprint $table) {
            $table->id();
            $table->string('description')->unique();
            $table->unsignedBigInteger('idBrand');
            $table->foreign('idBrand')->references('id')->on('brand');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('design', function (Blueprint $table) {
            //
        });
    }
};
