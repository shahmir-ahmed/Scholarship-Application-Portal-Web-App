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
        Schema::create('applicant_family_member_earnings', function (Blueprint $table) {
            $table->increments('applicant_family_member_earnings_id');
            $table->string('applicant_family_member_earnings_member_name');
            $table->string('applicant_family_member_earnings_member_relation');
            $table->string('applicant_family_member_earnings_member_occupation');
            $table->string('applicant_family_member_earnings_member_organization');
            $table->string('applicant_family_member_earnings_member_designation');
            $table->string('applicant_family_member_earnings_member_monthly_income');
            $table->string('applicant_family_member_earnings_member_remarks');
            $table->integer('applicant_family_member_earnings_application_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('applicant_family_member_earnings');
    }
};
