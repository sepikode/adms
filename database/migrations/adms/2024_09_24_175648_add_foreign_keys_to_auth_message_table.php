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
        Schema::connection('adms')->table('auth_message', function (Blueprint $table) {
            $table->foreign(['user_id'], 'user_id_refs_id_650f49a6')->references(['id'])->on('auth_user')->onUpdate('no action')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::connection('adms')->table('auth_message', function (Blueprint $table) {
            $table->dropForeign('user_id_refs_id_650f49a6');
        });
    }
};
