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
        Schema::connection('adms')->create('user_of_run', function (Blueprint $table) {
            $table->integer('user_id');
            $table->integer('num_of_run_id');
            $table->dateTime('start_date')->default('1900-01-01 00:00:00');
            $table->dateTime('end_date')->default('2099-12-31 00:00:00');
            $table->integer('is_not_of_run')->nullable()->default(0);
            $table->integer('order_run')->nullable();

            $table->primary(['user_id', 'num_of_run_id', 'start_date', 'end_date']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::connection('adms')->dropIfExists('user_of_run');
    }
};
