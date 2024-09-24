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
        Schema::connection('adms')->table('devlog', function (Blueprint $table) {
            $table->foreign(['SN_id'], 'SN_id_refs_SN_9fc6243')->references(['SN'])->on('iclock')->onUpdate('no action')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::connection('adms')->table('devlog', function (Blueprint $table) {
            $table->dropForeign('SN_id_refs_SN_9fc6243');
        });
    }
};
