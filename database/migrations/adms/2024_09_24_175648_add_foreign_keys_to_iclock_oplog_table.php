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
        Schema::connection('adms')->table('iclock_oplog', function (Blueprint $table) {
            $table->foreign(['SN'], 'SN_refs_SN_3b91645d')->references(['SN'])->on('iclock')->onUpdate('no action')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::connection('adms')->table('iclock_oplog', function (Blueprint $table) {
            $table->dropForeign('SN_refs_SN_3b91645d');
        });
    }
};
