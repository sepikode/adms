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
        Schema::connection('adms')->table('devcmds', function (Blueprint $table) {
            $table->foreign(['SN_id'], 'SN_id_refs_SN_2cf7b853')->references(['SN'])->on('iclock')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['User_id'], 'User_id_refs_id_21fb0645')->references(['id'])->on('auth_user')->onUpdate('no action')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::connection('adms')->table('devcmds', function (Blueprint $table) {
            $table->dropForeign('SN_id_refs_SN_2cf7b853');
            $table->dropForeign('User_id_refs_id_21fb0645');
        });
    }
};
