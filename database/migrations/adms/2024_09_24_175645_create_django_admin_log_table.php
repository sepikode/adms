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
        Schema::connection('adms')->create('django_admin_log', function (Blueprint $table) {
            $table->integer('id', true);
            $table->dateTime('action_time');
            $table->integer('user_id')->index('django_admin_log_user_id');
            $table->integer('content_type_id')->nullable()->index('django_admin_log_content_type_id');
            $table->longText('object_id')->nullable();
            $table->string('object_repr', 200);
            $table->unsignedSmallInteger('action_flag');
            $table->longText('change_message');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::connection('adms')->dropIfExists('django_admin_log');
    }
};
