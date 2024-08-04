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
        Schema::create('cineme_ticket', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('movie_id')->nullable();
            $table->foreign('movie_id')->references('id')->on('movie')->onDelete('cascade');
            $table->unsignedBigInteger('cinema_id')->nullable();
            $table->foreign('cinema_id')->references('id')->on('cinema')->onDelete('cascade');
            $table->string('show_time')->nullable();
            $table->string('avaliable_seat')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cineme_ticket');
    }
};
