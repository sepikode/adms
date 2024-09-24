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
        Schema::connection('adms')->create('auth_user_groups', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('user_id')->index('auth_user_groups_user_id');
            $table->integer('group_id')->index('auth_user_groups_group_id');

            $table->unique(['user_id', 'group_id'], 'user_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::connection('adms')->dropIfExists('auth_user_groups');
    }
};
