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
        Schema::create('applicant_family_accomodation_expenditures', function (Blueprint $table) {
            $table->integer('applicant_family_accomodation_expenditures_id');
            $table->string('applicant_family_accomodation_expenditures_type');
            $table->string('applicant_family_accomodation_expenditures_status');
            $table->string('applicant_family_accomodation_expenditures_rent_payment_type');
            $table->string('applicant_family_accomodation_expenditures_plot_size');
            $table->string('applicant_family_accomodation_expenditures_address');
            $table->string('applicant_family_accomodation_expenditures_total_bed_rooms');
            $table->string('applicant_family_accomodation_expenditures_total_ACs');
            $table->string('applicant_family_accomodation_expenditures_monthly_rent');
            $table->string('applicant_family_accomodation_expenditures_total_rent_expense');
            $table->integer('applicant_family_accomodation_expenditures_application_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('applicant_family_accomodation_expenditures');
    }
};
