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
        Schema::connection('adms')->create('iclock_deptadmin', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('user_id')->index('iclock_deptadmin_user_id');
            $table->integer('dept_id')->index('iclock_deptadmin_dept_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::connection('adms')->dropIfExists('iclock_deptadmin');
    }
};
