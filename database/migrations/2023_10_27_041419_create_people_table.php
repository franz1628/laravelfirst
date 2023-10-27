<?php

use App\Models\TypeDocument;
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
        Schema::create('person', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('firstsurname');
            $table->string('secondsurname');
            $table->integer('document');
            $table->unsignedBigInteger('idTypeDocument');
            $table->foreign('idTypeDocument')->references('id')->on('typeDocument');
            $table->unsignedBigInteger('idRole');
            $table->foreign('idRole')->references('id')->on('role');
            $table->date('birth');
            $table->integer('state')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('person');
    }
};
