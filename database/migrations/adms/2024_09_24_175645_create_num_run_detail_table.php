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
        Schema::connection('adms')->create('num_run_detail', function (Blueprint $table) {
            $table->smallInteger('num_run_id');
            $table->dateTime('start_time');
            $table->dateTime('end_time')->nullable();
            $table->smallInteger('s_days');
            $table->smallInteger('e_days');
            $table->integer('sch_class_id')->nullable()->default(-1);

            $table->primary(['num_run_id', 's_days', 'start_time']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::connection('adms')->dropIfExists('num_run_detail');
    }
};
