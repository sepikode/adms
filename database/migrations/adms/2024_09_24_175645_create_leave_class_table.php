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
        Schema::connection('adms')->create('leave_class', function (Blueprint $table) {
            $table->integer('leave_id', true);
            $table->string('leave_name', 20);
            $table->float('min_unit')->default(1);
            $table->smallInteger('unit')->default(1);
            $table->smallInteger('remaind_proc')->default(1);
            $table->smallInteger('remaind_count')->default(1);
            $table->string('report_symbol', 4)->default('-');
            $table->float('deduct')->default(0);
            $table->integer('color')->default(0);
            $table->smallInteger('classify')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::connection('adms')->dropIfExists('leave_class');
    }
};
