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
        Schema::connection('adms')->create('iclock_oplog', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('SN', 20)->nullable()->index('iclock_oplog_sn');
            $table->integer('admin');
            $table->smallInteger('OP');
            $table->dateTime('OPTime');
            $table->integer('Object')->nullable();
            $table->integer('Param1')->nullable();
            $table->integer('Param2')->nullable();
            $table->integer('Param3')->nullable();

            $table->unique(['SN', 'OPTime'], 'sn');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::connection('adms')->dropIfExists('iclock_oplog');
    }
};
