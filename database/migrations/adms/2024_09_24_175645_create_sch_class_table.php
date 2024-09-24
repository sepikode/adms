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
        Schema::connection('adms')->create('sch_class', function (Blueprint $table) {
            $table->integer('sch_class_id', true);
            $table->string('sch_name', 20);
            $table->dateTime('start_time');
            $table->dateTime('end_time');
            $table->integer('late_minutes')->nullable();
            $table->integer('early_minutes')->nullable();
            $table->integer('check_in')->nullable()->default(1);
            $table->integer('check_out')->nullable()->default(1);
            $table->dateTime('check_in_time1')->nullable();
            $table->dateTime('check_in_time2')->nullable();
            $table->dateTime('check_out_time1')->nullable();
            $table->dateTime('check_out_time2')->nullable();
            $table->integer('color')->nullable()->default(16715535);
            $table->smallInteger('auto_bind')->nullable()->default(1);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::connection('adms')->dropIfExists('sch_class');
    }
};
