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
        Schema::create('applicant_siblings', function (Blueprint $table) {
            $table->integer('applicant_siblings_id');
            $table->string('applicant_siblings_name');
            $table->string('applicant_siblings_relation');
            $table->string('applicant_siblings_institution_name');
            $table->string('applicant_siblings_fees_per_month');
            $table->integer('applicant_siblings_user_id');
            $table->integer('applicant_siblings_scholarship_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('applicant_siblings');
    }
};
