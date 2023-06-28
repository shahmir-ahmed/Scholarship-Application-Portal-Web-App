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
        Schema::create('applicant_father_details', function (Blueprint $table) {
            $table->integer('applicant_father_details_id');
            $table->string('applicant_father_details_name');
            $table->string('applicant_father_details_CNIC');
            $table->string('applicant_father_details_vital_status');
            $table->string('applicant_father_details_job_status');
            $table->string('applicant_father_details_martial_status');
            $table->string('applicant_father_details_mobile_number');
            $table->string('applicant_father_details_occupation');
            $table->string('applicant_father_details_NTS');
            $table->string('applicant_father_details_designation_grade');
            $table->string('applicant_father_details_monthly_income');
            $table->string('applicant_father_details_gross_income');
            $table->string('applicant_father_details_applicant_name');
            $table->string('applicant_father_details_applicant_relation');
            $table->string('applicant_father_details_applicant_occupation_designation');
            $table->string('applicant_father_details_applicant_monthly_financial_support');
            $table->integer('applicant_father_details_application_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('applicant_father_details');
    }
};
