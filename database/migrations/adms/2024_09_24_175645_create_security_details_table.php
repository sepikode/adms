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
        Schema::connection('adms')->create('security_details', function (Blueprint $table) {
            $table->integer('security_detail_id', true);
            $table->integer('user_id')->nullable()->index('user_id');
            $table->smallInteger('dept_id')->nullable();
            $table->smallInteger('schedule')->nullable();
            $table->smallInteger('user_info')->nullable();
            $table->smallInteger('enroll_fingers')->nullable();
            $table->smallInteger('report_view')->nullable();
            $table->string('report', 10)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::connection('adms')->dropIfExists('security_details');
    }
};
