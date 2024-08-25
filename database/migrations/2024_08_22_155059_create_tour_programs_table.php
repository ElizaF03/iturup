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
        Schema::create('tour_programs', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignId('tour_id')->constrained(
                table: 'tours', indexName: 'programs_tour_id'
            );
            $table->integer('day_number');
            $table->text('description');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tour_programs');
    }
};
