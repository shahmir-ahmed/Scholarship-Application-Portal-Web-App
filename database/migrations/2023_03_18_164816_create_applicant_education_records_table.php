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
        Schema::create('applicant_education_records', function (Blueprint $table) {
            $table->integer('applicant_education_records_id');
            $table->string('applicant_education_records_level_of_study');
            $table->string('applicant_education_records_institution_name');
            $table->string('applicant_education_records_per_month_fees');
            $table->string('applicant_education_records_from_date');
            $table->string('applicant_education_records_to_date');
            $table->string('applicant_education_records_gpa_division');
            $table->string('applicant_education_records_cgpa_percentage');
            $table->integer('applicant_education_records_user_id');
            $table->integer('applicant_education_records_scholarship_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('applicant_education_records');
    }
};
