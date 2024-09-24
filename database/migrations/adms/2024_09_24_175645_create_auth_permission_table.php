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
        Schema::connection('adms')->create('auth_permission', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('name', 50);
            $table->integer('content_type_id')->index('auth_permission_content_type_id');
            $table->string('codename', 100);

            $table->unique(['content_type_id', 'codename'], 'content_type_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::connection('adms')->dropIfExists('auth_permission');
    }
};
