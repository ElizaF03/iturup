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
        Schema::create('hotels_on_tour', function (Blueprint $table) {
            $table->id();
            $table->foreignId('tour_id')->constrained(
                table: 'tours'
            );
            $table->foreignId('hotel_id')->constrained(
                table: 'hotels'
            );
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hotels_on_tour');
    }
};
