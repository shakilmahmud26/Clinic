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
        Schema::create('qcs', function (Blueprint $table) {
            $table->id();
            $table->string('instrument')->nullable();
            $table->string('run_no')->nullable();
            $table->string('run_date_time')->nullable();
            $table->string('performed_by')->nullable();
            $table->json('tests')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('qcs');
    }
};
