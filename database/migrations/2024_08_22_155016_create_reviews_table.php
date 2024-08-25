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
        Schema::create('reviews', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('name', length: 255);
            $table->integer('year');
            $table->string('month', length: 10);
            $table->text('message');
            $table->foreignId('user_id')->constrained(
                table: 'users', indexName: 'reviews_user_id'
            );
            $table->date('creation_date');
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reviews');
    }
};
