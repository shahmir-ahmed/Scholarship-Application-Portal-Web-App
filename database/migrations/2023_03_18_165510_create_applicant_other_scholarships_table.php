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
        Schema::create('applicant_other_scholarships', function (Blueprint $table) {
            $table->integer('applicant_other_scholarships_id');
            $table->string('applicant_other_scholarships_institution_name');
            $table->string('applicant_other_scholarships_name');
            $table->string('applicant_other_scholarships_total_amount');
            $table->string('applicant_other_scholarships_total_period');
            $table->string('applicant_other_scholarships_class_level_granted');
            $table->string('applicant_other_scholarships_purpose');
            $table->integer('applicant_other_scholarships_user_id');
            $table->integer('applicant_other_scholarships_scholarship_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('applicant_other_scholarships');
    }
};
