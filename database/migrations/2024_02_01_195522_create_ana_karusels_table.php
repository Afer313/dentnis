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
        Schema::create('ana_karusels', function (Blueprint $table) {
            $table->id();
            $table->binary('img');
            $table->boolean('en')->default(true);
            $table->boolean('tr')->default(true);
            $table->boolean('ru')->default(true);
            $table->string('link');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ana_karusels');
    }
};
