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
            // Voeg de 'user_id' kolom toe (integer of nullable)
            $table->unsignedBigInteger('user_id')->nullable()->after('last_activity');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('sessions', function (Blueprint $table) {
            // Verwijder de 'user_id' kolom als we de migratie terugdraaien
            $table->dropColumn('user_id');
        });
    }
};
