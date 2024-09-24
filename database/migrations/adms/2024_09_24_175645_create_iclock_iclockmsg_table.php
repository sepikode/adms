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
        Schema::connection('adms')->create('iclock_iclockmsg', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('SN_id', 20)->index('iclock_iclockmsg_sn_id');
            $table->integer('MsgType');
            $table->dateTime('StartTime');
            $table->dateTime('EndTime')->nullable();
            $table->string('MsgParam', 32)->nullable();
            $table->string('MsgContent', 200)->nullable();
            $table->dateTime('LastTime')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::connection('adms')->dropIfExists('iclock_iclockmsg');
    }
};
