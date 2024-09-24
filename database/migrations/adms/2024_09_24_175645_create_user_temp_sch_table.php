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
        Schema::connection('adms')->create('user_temp_sch', function (Blueprint $table) {
            $table->integer('user_id');
            $table->dateTime('come_time');
            $table->dateTime('leave_time');
            $table->integer('overtime')->nullable()->default(0);
            $table->smallInteger('type')->nullable()->default(0);
            $table->smallInteger('flag')->nullable()->default(1);
            $table->integer('sch_class_id')->nullable()->default(-1);

            $table->primary(['user_id', 'come_time', 'leave_time']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::connection('adms')->dropIfExists('user_temp_sch');
    }
};
