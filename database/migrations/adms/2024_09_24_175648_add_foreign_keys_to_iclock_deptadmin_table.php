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
        Schema::connection('adms')->table('iclock_deptadmin', function (Blueprint $table) {
            $table->foreign(['dept_id'], 'dept_id_refs_DeptID_301f0ebd')->references(['DeptID'])->on('departments')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['user_id'], 'user_id_refs_id_47b0265e')->references(['id'])->on('auth_user')->onUpdate('no action')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::connection('adms')->table('iclock_deptadmin', function (Blueprint $table) {
            $table->dropForeign('dept_id_refs_DeptID_301f0ebd');
            $table->dropForeign('user_id_refs_id_47b0265e');
        });
    }
};
