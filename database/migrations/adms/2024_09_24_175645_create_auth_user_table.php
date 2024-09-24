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
        Schema::connection('adms')->create('auth_user', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('username', 30)->unique('username');
            $table->string('first_name', 30);
            $table->string('last_name', 30);
            $table->string('email', 75);
            $table->string('password', 128);
            $table->boolean('is_staff');
            $table->boolean('is_active');
            $table->boolean('is_superuser');
            $table->dateTime('last_login');
            $table->dateTime('date_joined');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::connection('adms')->dropIfExists('auth_user');
    }
};
