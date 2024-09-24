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
        Schema::connection('adms')->create('iclock', function (Blueprint $table) {
            $table->string('SN', 20)->primary();
            $table->integer('State');
            $table->dateTime('LastActivity')->nullable();
            $table->string('TransTimes', 50)->nullable();
            $table->integer('TransInterval');
            $table->string('LogStamp', 20)->nullable();
            $table->string('OpLogStamp', 20)->nullable();
            $table->string('PhotoStamp', 20)->nullable();
            $table->string('Alias', 50);
            $table->integer('DeptID')->nullable()->index('iclock_deptid');
            $table->string('UpdateDB', 10);
            $table->string('Style', 50)->nullable();
            $table->string('FWVersion', 30)->nullable();
            $table->integer('FPCount')->nullable();
            $table->integer('TransactionCount')->nullable();
            $table->integer('UserCount')->nullable();
            $table->string('MainTime', 20)->nullable();
            $table->integer('MaxFingerCount')->nullable();
            $table->integer('MaxAttLogCount')->nullable();
            $table->string('DeviceName', 30)->nullable();
            $table->string('AlgVer', 30)->nullable();
            $table->string('FlashSize', 10)->nullable();
            $table->string('FreeFlashSize', 10)->nullable();
            $table->string('Language', 30)->nullable();
            $table->string('VOLUME', 10)->nullable();
            $table->string('DtFmt', 10)->nullable();
            $table->string('IPAddress', 20)->nullable();
            $table->string('IsTFT', 5)->nullable();
            $table->string('Platform', 20)->nullable();
            $table->string('Brightness', 5)->nullable();
            $table->string('BackupDev', 30)->nullable();
            $table->string('OEMVendor', 30)->nullable();
            $table->string('City', 50)->nullable();
            $table->smallInteger('AccFun');
            $table->smallInteger('TZAdj');
            $table->smallInteger('DelTag');
            $table->string('FPVersion', 10)->nullable();
            $table->string('PushVersion', 10)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::connection('adms')->dropIfExists('iclock');
    }
};
