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
        Schema::connection('adms')->create('user_spec_day', function (Blueprint $table) {
            $table->integer('user_id');
            $table->dateTime('start_spec_day')->default('1900-01-01 00:00:00');
            $table->dateTime('end_spec_day')->nullable()->default('2099-12-31 00:00:00');
            $table->smallInteger('date_id')->default(-1);
            $table->string('yuanying', 200)->nullable();
            $table->dateTime('date')->nullable();

            $table->primary(['user_id', 'start_spec_day', 'date_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::connection('adms')->dropIfExists('user_spec_day');
    }
};
