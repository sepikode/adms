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
        Schema::connection('adms')->table('userinfo', function (Blueprint $table) {
            $table->foreign(['defaultdeptid'], 'defaultdeptid_refs_DeptID_17a2b9c0')->references(['DeptID'])->on('departments')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['SN'], 'SN_refs_SN_3dca41a1')->references(['SN'])->on('iclock')->onUpdate('no action')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::connection('adms')->table('userinfo', function (Blueprint $table) {
            $table->dropForeign('defaultdeptid_refs_DeptID_17a2b9c0');
            $table->dropForeign('SN_refs_SN_3dca41a1');
        });
    }
};
