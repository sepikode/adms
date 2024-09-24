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
        Schema::connection('adms')->create('devlog', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('SN_id', 20)->index('devlog_sn_id');
            $table->string('OP', 8);
            $table->string('Object', 20)->nullable();
            $table->integer('Cnt');
            $table->integer('ECnt');
            $table->dateTime('OpTime');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::connection('adms')->dropIfExists('devlog');
    }
};
