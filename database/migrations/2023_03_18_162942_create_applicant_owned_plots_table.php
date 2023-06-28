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
        Schema::create('applicant_owned_plots', function (Blueprint $table) {
            $table->integer('applicant_owned_plots_id');
            $table->string('applicant_owned_plots_asset_type');
            $table->string('applicant_owned_plots_quantity');
            $table->string('applicant_owned_plots_size');
            $table->string('applicant_owned_plots_location');
            $table->string('applicant_owned_plots_cultivable_area');
            $table->string('applicant_owned_plots_agricultural');
            $table->integer('applicant_owned_plots_user_id');
            $table->integer('applicant_owned_plots_scholarship_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('applicant_owned_plots');
    }
};
