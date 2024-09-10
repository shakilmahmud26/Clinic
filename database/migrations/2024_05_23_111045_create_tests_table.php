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
        Schema::create('tests', function (Blueprint $table) {
            $table->id();
            $table->string('category')->nullable();
            $table->string('cpt_code')->nullable();
            $table->string('lonic_code')->nullable();
            $table->string('code')->nullable();
            $table->string('name')->nullable();
            $table->string('short_name')->nullable();
            $table->string('test_group')->nullable();
            $table->string('sample_type')->nullable();
            $table->string('display_order')->nullable();
            $table->string('price_a')->nullable();
            $table->string('price_b')->nullable();
            $table->string('price_c')->nullable();
            $table->string('price_d')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tests');
    }
};
