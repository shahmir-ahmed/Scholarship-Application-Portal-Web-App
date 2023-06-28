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
        Schema::create('applicant_worth_assets', function (Blueprint $table) {
            $table->integer('applicant_worth_assets_id');
            $table->string('applicant_worth_assets_asset_title');
            $table->string('applicant_worth_assets_to_father');
            $table->string('applicant_worth_assets_to_mother');
            $table->string('applicant_worth_assets_to_spouse');
            $table->string('applicant_worth_assets_to_guardian');
            $table->integer('applicant_worth_assets_user_id');
            $table->integer('applicant_worth_assets_scholarship_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('applicant_worth_assets');
    }
};
