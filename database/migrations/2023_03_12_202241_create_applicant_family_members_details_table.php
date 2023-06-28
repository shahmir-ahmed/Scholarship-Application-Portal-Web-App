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
        Schema::create('applicant_family_members', function (Blueprint $table) {
            $table->increments('applicant_family_members_id');
            $table->string('applicant_family_members_name');
            $table->string('applicant_family_members_martial_status');
            $table->string('applicant_family_members_relation');
            $table->string('applicant_family_members_remarks');
            $table->integer('applicant_family_members_application_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('appplicant_family_members_details');
    }
};
