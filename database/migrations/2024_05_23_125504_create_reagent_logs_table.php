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
        Schema::create('reagent_logs', function (Blueprint $table) {
            $table->id();
            $table->string('instrument')->nullable();
            $table->string('test_name')->nullable();
            $table->string('lot_number')->nullable();
            $table->string('test_per_kit')->nullable();
            $table->string('date_opened')->nullable();
            $table->string('expiration')->nullable();
            $table->string('unit')->nullable();
            $table->string('reference_range_from')->nullable();
            $table->string('reference_range_to')->nullable();
            $table->string('panic_value_high')->nullable();
            $table->string('panic_value_low')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reagent_logs');
    }
};