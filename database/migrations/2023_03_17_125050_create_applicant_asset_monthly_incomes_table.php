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
        Schema::create('applicant_asset_monthly_incomes', function (Blueprint $table) {
            $table->integer('applicant_asset_monthly_incomes_id');
            $table->string('applicant_asset_monthly_incomes_type');
            $table->string('applicant_asset_monthly_incomes_to_father');
            $table->string('applicant_asset_monthly_incomes_to_mother');
            $table->string('applicant_asset_monthly_incomes_to_spouse');
            $table->string('applicant_asset_monthly_incomes_to_self');
            $table->string('applicant_asset_monthly_incomes_to_other');
            $table->integer('applicant_asset_monthly_incomes_application_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('applicant_asset_monthly_incomes');
    }
};
