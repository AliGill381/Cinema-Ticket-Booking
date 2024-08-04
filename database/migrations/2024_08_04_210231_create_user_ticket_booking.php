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
        Schema::create('user_ticket_booking', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id')->nullable();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');    
            $table->unsignedBigInteger('cinema_id')->nullable();
            $table->foreign('cinema_id')->references('id')->on('cinema')->onDelete('cascade');    
            $table->unsignedBigInteger('cinema_ticket_id')->nullable();
            $table->foreign('cinema_ticket_id')->references('id')->on('cineme_ticket')->onDelete('cascade');
            $table->string('seats')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('table_user_ticket_booking');
    }
};