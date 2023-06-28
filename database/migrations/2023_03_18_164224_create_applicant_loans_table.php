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
        Schema::create('applicant_loans', function (Blueprint $table) {
            $table->integer('applicant_loans_id');
            $table->string('applicant_loans_loan_one_reason');
            $table->string('applicant_loans_loan_two_reason');
            $table->string('applicant_loans_loan_three_reason');
            $table->integer('applicant_loans_user_id');
            $table->integer('applicant_loans_scholarship_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('applicant_loans');
    }
};
