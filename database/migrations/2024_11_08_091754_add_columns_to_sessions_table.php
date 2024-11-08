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
        Schema::table('sessions', function (Blueprint $table) {
            // Voeg de ontbrekende kolommen toe
            $table->string('ip_address', 45)->nullable()->after('last_activity');
            $table->text('user_agent')->nullable()->after('ip_address');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('sessions', function (Blueprint $table) {
            // Verwijder de toegevoegde kolommen
            $table->dropColumn('ip_address');
            $table->dropColumn('user_agent');
        });
    }
};