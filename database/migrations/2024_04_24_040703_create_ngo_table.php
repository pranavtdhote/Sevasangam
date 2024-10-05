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
        Schema::create('ngo', function (Blueprint $table) {
            $table->id();
            $table->string('ngo_name');
            $table->string('ngo_email');
            $table->string('ngo_location');
            $table->string('ngo_address');
            $table->string('ngo_portfolio');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ngo');
    }
};
