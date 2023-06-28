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
        Schema::create('applicant_family_monthly_incomes', function (Blueprint $table) {
            $table->integer('applicant_family_monthly_incomes_id');
            $table->string('applicant_family_monthly_incomes_member_name');
            $table->string('applicant_family_monthly_incomes_member_relation');
            $table->string('applicant_family_monthly_incomes_member_monthly_asset_income');
            $table->string('applicant_family_monthly_incomes_member_monthly_gross_income');
            $table->string('applicant_family_monthly_incomes_member_monthly_net_income');
            $table->integer('applicant_family_monthly_incomes_application_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('applicant_family_monthly_incomes');
    }
};
