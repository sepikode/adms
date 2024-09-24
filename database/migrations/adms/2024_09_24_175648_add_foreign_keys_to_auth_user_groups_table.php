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
        Schema::connection('adms')->table('auth_user_groups', function (Blueprint $table) {
            $table->foreign(['group_id'], 'group_id_refs_id_f116770')->references(['id'])->on('auth_group')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['user_id'], 'user_id_refs_id_7ceef80f')->references(['id'])->on('auth_user')->onUpdate('no action')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::connection('adms')->table('auth_user_groups', function (Blueprint $table) {
            $table->dropForeign('group_id_refs_id_f116770');
            $table->dropForeign('user_id_refs_id_7ceef80f');
        });
    }
};
