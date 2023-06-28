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
        Schema::create('applicant_other_accomodation_expenditures', function (Blueprint $table) {
            $table->integer('applicant_other_accomodation_expenditures_id');
            $table->string('applicant_other_accomodation_expenditures_telephone');
            $table->string('applicant_other_accomodation_expenditures_electricity');
            $table->string('applicant_other_accomodation_expenditures_gas');
            $table->string('applicant_other_accomodation_expenditures_water');
            $table->string('applicant_other_accomodation_expenditures_education');
            $table->string('applicant_other_accomodation_expenditures_accomodation');
            $table->string('applicant_other_accomodation_expenditures_utilities');
            $table->string('applicant_other_accomodation_expenditures_medical');
            $table->string('applicant_other_accomodation_expenditures_misc');
            $table->integer('applicant_other_accomodation_expenditures_application_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('applicant_other_accomodation_expenditures');
    }
};
