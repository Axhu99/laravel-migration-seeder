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
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string('stazione_partenza');
            $table->string('stazione_arrivo');
            $table->string('orario_partenza');
            $table->string('orario_arrivo');
            $table->string('codice_treno')->unique();
            $table->string('numero_carrozza', 3)->nullable();
            $table->string('azienda', 20);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trains');
    }
};
