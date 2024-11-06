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
        Schema::create('appointments', function (Blueprint $table) {
            $table->id();
            $table->string('name');                  // Naam van de persoon die de afspraak maakt
            $table->string('email');                 // E-mailadres voor communicatie
            $table->dateTime('appointment_date');    // Datum en tijd van de afspraak
            $table->text('notes')->nullable();       // Optioneel veld voor extra opmerkingen
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('appointments');
    }
};
