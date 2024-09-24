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
        Schema::connection('adms')->create('num_run', function (Blueprint $table) {
            $table->integer('num_run_id', true);
            $table->integer('old_id')->nullable()->default(-1);
            $table->string('name', 30);
            $table->dateTime('start_date')->nullable()->default('1900-01-01 00:00:00');
            $table->dateTime('end_date')->nullable()->default('2099-12-31 00:00:00');
            $table->smallInteger('cycle')->nullable()->default(1);
            $table->smallInteger('units')->nullable()->default(1);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::connection('adms')->dropIfExists('num_run');
    }
};
