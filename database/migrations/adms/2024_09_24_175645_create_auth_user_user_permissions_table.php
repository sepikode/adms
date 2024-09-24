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
        Schema::connection('adms')->create('auth_user_user_permissions', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('user_id')->index('auth_user_user_permissions_user_id');
            $table->integer('permission_id')->index('auth_user_user_permissions_permission_id');

            $table->unique(['user_id', 'permission_id'], 'user_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::connection('adms')->dropIfExists('auth_user_user_permissions');
    }
};
