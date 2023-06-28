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
        Schema::create('applicant_other_assets', function (Blueprint $table) {
            $table->integer('applicant_other_assets_id');
            $table->string('applicant_other_assets_transport_type');
            $table->string('applicant_other_assets_model_no');
            $table->string('applicant_other_assets_engine_capacity');
            $table->string('applicant_other_assets_reg_no');
            $table->string('applicant_other_assets_ownership_period');
            $table->integer('applicant_other_assets_application_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('applicant_other_assets');
    }
};
