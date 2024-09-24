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
        Schema::connection('adms')->create('shift', function (Blueprint $table) {
            $table->integer('shift_id', true);
            $table->string('name', 20);
            $table->integer('ushift_id')->nullable()->default(-1);
            $table->dateTime('start_date')->nullable()->default('1900-01-01 00:00:00');
            $table->dateTime('end_date')->nullable()->default('1900-12-31 00:00:00');
            $table->smallInteger('run_num')->nullable()->default(0);
            $table->smallInteger('cycle')->nullable()->default(0);
            $table->smallInteger('units')->nullable()->default(0);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::connection('adms')->dropIfExists('shift');
    }
};
