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
        Schema::connection('adms')->table('auth_user_user_permissions', function (Blueprint $table) {
            $table->foreign(['permission_id'], 'permission_id_refs_id_67e79cb')->references(['id'])->on('auth_permission')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['user_id'], 'user_id_refs_id_dfbab7d')->references(['id'])->on('auth_user')->onUpdate('no action')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::connection('adms')->table('auth_user_user_permissions', function (Blueprint $table) {
            $table->dropForeign('permission_id_refs_id_67e79cb');
            $table->dropForeign('user_id_refs_id_dfbab7d');
        });
    }
};
