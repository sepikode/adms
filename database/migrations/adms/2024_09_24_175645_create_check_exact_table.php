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
        Schema::connection('adms')->create('check_exact', function (Blueprint $table) {
            $table->integer('exact_id', true);
            $table->integer('user_id')->nullable()->default(0)->index('user_id');
            $table->dateTime('check_time')->nullable();
            $table->string('check_type', 2)->nullable();
            $table->smallInteger('is_add')->nullable()->default(0);
            $table->string('yuyin', 25)->nullable();
            $table->smallInteger('is_modify')->nullable()->default(0);
            $table->smallInteger('is_delete')->nullable()->default(0);
            $table->smallInteger('in_count')->nullable()->default(0);
            $table->smallInteger('is_count')->nullable()->default(0);
            $table->string('modify_by', 20)->nullable();
            $table->dateTime('date')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::connection('adms')->dropIfExists('check_exact');
    }
};
