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
        Schema::create('physicians', function (Blueprint $table) {
            $table->id();
            $table->string('account_no');
            $table->string('facility_name')->nullable();
            $table->string('account_representative')->nullable();
            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('pcp_no')->nullable();
            $table->string('npi_no')->nullable();
            $table->string('street_address')->nullable();
            $table->string('city')->nullable();
            $table->string('state')->nullable();
            $table->string('zip_code')->nullable();
            $table->string('clinic_name')->nullable();
            $table->string('office_name')->nullable();
            $table->string('fax_no')->nullable();
            $table->string('phone_no')->nullable();
            $table->string('notify_1')->nullable();
            $table->string('notify_2')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('physicians');
    }
};
