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
        Schema::create('applicant_family_member_currently_studying_details', function (Blueprint $table) {
            $table->integer('applicant_family_member_currently_studying_detail_id');
            $table->string('applicant_family_member_currently_studying_detail_name');
            $table->string('applicant_family_member_currently_studying_detail_relation');
            $table->string('applicant_family_member_currently_studying_detail_institution');
            $table->string('applicant_family_member_currently_studying_detail_fpm');
            $table->integer('applicant_family_member_currently_studying_detail_user_id');
            $table->integer('applicant_family_member_currently_studying_detail_scholarship_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('applicant_family_member_currently_studying_details');
    }
};
