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
        Schema::create('cinemas', function (Blueprint $table) {
            $table->id();
            $table->string('cinema_name')->nullable();
            $table->string('cinema_location')->nullable();
            $table->string('cinema_logo')->nullable();
            $table->string('cinema_description')->nullable();
            $table->string('cinema_mail')->nullable();
            $table->timestamps();
        });
    }
     
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cinema');
    }
};
