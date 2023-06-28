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
        Schema::create('applicant_personal_details', function (Blueprint $table) {
            $table->increments('applicant_id');
            $table->string('applicant_name');
            $table->string('applicant_age');
            $table->string('applicant_gender');
            $table->string('applicant_DOB');
            $table->string('applicant_CNIC');
            $table->string('applicant_martial_status');
            $table->string('applicant_domicile');
            $table->string('applicant_present_address');
            $table->string('applicant_permanant_address');
            $table->string('applicant_reg_no');
            $table->string('applicant_degree');
            $table->string('applicant_semester');
            $table->string('applicant_university');
            $table->string('applicant_CGPA');
            $table->bigInteger('applicant_user_id');
            $table->bigInteger('applicant_scholarship_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('applications');
    }
};
