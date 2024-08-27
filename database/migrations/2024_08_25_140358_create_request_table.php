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
        Schema::create('request', function (Blueprint $table) {
            $table->id();
            $table->foreignId('tour_id')->constrained(
                table: 'tours'
            );
            $table->string('name', length: 255);
            $table->string('email', length: 255);
            $table->string('phone', length: 255);
            $table->string('city', length: 255);
            $table->integer('number_of_people');
            $table->text('comment')->nullable();
            $table->date('tour_date');
            $table->enum('status', ['accepted', 'at_work', 'completed', 'canceled'])->default('accepted');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('request');
    }
};
