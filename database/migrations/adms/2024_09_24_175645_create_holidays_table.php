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
        Schema::connection('adms')->create('holidays', function (Blueprint $table) {
            $table->integer('holiday_id', true);
            $table->string('holiday_name', 20)->unique('holiday_name');
            $table->smallInteger('holiday_year')->nullable();
            $table->smallInteger('holiday_month')->nullable();
            $table->smallInteger('holiday_day')->nullable()->default(1);
            $table->dateTime('start_time')->nullable();
            $table->smallInteger('duration')->nullable();
            $table->smallInteger('holiday_type')->nullable();
            $table->string('xin_bie', 4)->nullable();
            $table->string('min_zu', 50)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::connection('adms')->dropIfExists('holidays');
    }
};
