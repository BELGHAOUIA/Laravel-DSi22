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
        Schema::create('evenement_sportifs', function (Blueprint $table) {
            $table->id();
            $table->string('nom',100);
            $table->text('description');
            $table->string('lieu',100);
            $table->string('poster');
            $table->string('posterURL');
            $table->date('dateDebut');
            $table->date('dateFin');
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('evenement_sportifs');
    }
};
