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
        Schema::connection('adms')->table('iclock_messages', function (Blueprint $table) {
            $table->foreign(['DeptID_id'], 'DeptID_id_refs_DeptID_a1c008a')->references(['DeptID'])->on('departments')->onUpdate('no action')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::connection('adms')->table('iclock_messages', function (Blueprint $table) {
            $table->dropForeign('DeptID_id_refs_DeptID_a1c008a');
        });
    }
};
