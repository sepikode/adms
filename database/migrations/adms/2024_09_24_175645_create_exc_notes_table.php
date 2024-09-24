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
        Schema::connection('adms')->create('exc_notes', function (Blueprint $table) {
            $table->integer('user_id')->nullable();
            $table->dateTime('att_date')->nullable();
            $table->string('notes', 200)->nullable();

            $table->unique(['user_id', 'att_date'], 'user_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::connection('adms')->dropIfExists('exc_notes');
    }
};
