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
        Schema::connection('adms')->table('iclock_adminlog', function (Blueprint $table) {
            $table->foreign(['User_id'], 'User_id_refs_id_1917be56')->references(['id'])->on('auth_user')->onUpdate('no action')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::connection('adms')->table('iclock_adminlog', function (Blueprint $table) {
            $table->dropForeign('User_id_refs_id_1917be56');
        });
    }
};
