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
        Schema::connection('adms')->table('auth_group_permissions', function (Blueprint $table) {
            $table->foreign(['group_id'], 'group_id_refs_id_3cea63fe')->references(['id'])->on('auth_group')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['permission_id'], 'permission_id_refs_id_5886d21f')->references(['id'])->on('auth_permission')->onUpdate('no action')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::connection('adms')->table('auth_group_permissions', function (Blueprint $table) {
            $table->dropForeign('group_id_refs_id_3cea63fe');
            $table->dropForeign('permission_id_refs_id_5886d21f');
        });
    }
};
