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
        Schema::connection('adms')->create('checkinout', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('userid')->index('checkinout_userid');
            $table->dateTime('checktime');
            $table->string('checktype', 1);
            $table->integer('verifycode');
            $table->string('SN', 20)->nullable()->index('checkinout_sn');
            $table->string('sensorid', 5)->nullable();
            $table->string('WorkCode', 20)->nullable();
            $table->string('Reserved', 20)->nullable();

            $table->unique(['userid', 'checktime'], 'userid');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::connection('adms')->dropIfExists('checkinout');
    }
};
