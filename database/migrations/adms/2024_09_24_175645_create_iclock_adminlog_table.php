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
        Schema::connection('adms')->create('iclock_adminlog', function (Blueprint $table) {
            $table->integer('id', true);
            $table->dateTime('time');
            $table->integer('User_id')->nullable()->index('iclock_adminlog_user_id');
            $table->string('model', 40)->nullable();
            $table->string('action', 40);
            $table->string('object', 40)->nullable();
            $table->integer('count');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::connection('adms')->dropIfExists('iclock_adminlog');
    }
};
