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
        Schema::connection('adms')->table('iclock', function (Blueprint $table) {
            $table->foreign(['DeptID'], 'DeptID_refs_DeptID_6c0f82f2')->references(['DeptID'])->on('departments')->onUpdate('no action')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::connection('adms')->table('iclock', function (Blueprint $table) {
            $table->dropForeign('DeptID_refs_DeptID_6c0f82f2');
        });
    }
};
