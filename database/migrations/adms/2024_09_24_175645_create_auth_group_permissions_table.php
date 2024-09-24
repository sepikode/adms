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
        Schema::connection('adms')->create('auth_group_permissions', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('group_id')->index('auth_group_permissions_group_id');
            $table->integer('permission_id')->index('auth_group_permissions_permission_id');

            $table->unique(['group_id', 'permission_id'], 'group_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::connection('adms')->dropIfExists('auth_group_permissions');
    }
};
