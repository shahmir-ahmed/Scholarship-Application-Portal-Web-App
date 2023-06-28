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
        Schema::create('applicant_employment', function (Blueprint $table) {
            $table->increments('applicant_employment_id');
            $table->string('applicant_employment_designation');
            $table->string('applicant_employment_company_name');
            $table->string('applicant_employment_gross_income');
            $table->string('applicant_employment_monthly_income');
            $table->string('applicant_employment_telephone_number');
            $table->string('applicant_employment_email');
            $table->integer('applicant_employment_application_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('applicant_employment_details');
    }
};
