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
        Schema::create('control_logs', function (Blueprint $table) {
            $table->id();
            $table->string('instrument')->nullable();
            $table->string('control_name')->nullable();
            $table->string('date_opened')->nullable();
            $table->string('expiration')->nullable();
            $table->string('lot_number')->nullable();
            $table->string('unit')->nullable();
            $table->string('level')->nullable();
            $table->string('average_mean')->nullable();
            $table->string('range_from')->nullable();
            $table->string('range_to')->nullable();
            $table->string('qc_range')->nullable();
            $table->string('standard_deviation')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('control_logs');
    }
};