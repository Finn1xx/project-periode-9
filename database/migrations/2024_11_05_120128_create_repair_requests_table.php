<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRepairRequestsTable extends Migration
{
    public function up()
    {
        Schema::create('repair_requests', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email');                 // E-mailadres voor communicatie
            $table->string('title'); // Titel van het reparatieverzoek
            $table->text('description'); // Beschrijving van het probleem
            $table->string('status')->default('pending'); // Status kolom met default waarde
            $table->timestamps(); // Timestamps voor created_at en updated_at
        });
    }

    public function down()
    {
        Schema::dropIfExists('repair_requests');
    }
}
