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
        Schema::connection('adms')->create('devcmds', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('SN_id', 20)->index('devcmds_sn_id');
            $table->longText('CmdContent');
            $table->dateTime('CmdCommitTime');
            $table->dateTime('CmdTransTime')->nullable();
            $table->dateTime('CmdOverTime')->nullable();
            $table->integer('CmdReturn')->nullable();
            $table->integer('User_id')->nullable()->index('devcmds_user_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::connection('adms')->dropIfExists('devcmds');
    }
};
