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
        Schema::connection('adms')->create('iclock_messages', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('MsgType');
            $table->dateTime('StartTime');
            $table->dateTime('EndTime')->nullable();
            $table->longText('MsgContent')->nullable();
            $table->string('MsgImage', 64)->nullable();
            $table->integer('DeptID_id')->nullable()->index('iclock_messages_deptid_id');
            $table->string('MsgParam', 32)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::connection('adms')->dropIfExists('iclock_messages');
    }
};
