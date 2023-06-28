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
        Schema::create('applied_scholarships', function (Blueprint $table) {
            $table->id('applied_scholarships_id');
            $table->integer('applied_scholarships_user_id');
            $table->integer('applied_scholarships_scholarship_id');
            $table->string('applied_scholarships_status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('applied_scholarships');
    }
};
