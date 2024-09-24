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
        Schema::connection('adms')->table('checkinout', function (Blueprint $table) {
            $table->foreign(['SN'], 'SN_refs_SN_5f5eab5')->references(['SN'])->on('iclock')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['userid'], 'userid_refs_userid_6bd22319')->references(['userid'])->on('userinfo')->onUpdate('no action')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::connection('adms')->table('checkinout', function (Blueprint $table) {
            $table->dropForeign('SN_refs_SN_5f5eab5');
            $table->dropForeign('userid_refs_userid_6bd22319');
        });
    }
};
