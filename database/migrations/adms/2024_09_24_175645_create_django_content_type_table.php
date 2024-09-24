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
        Schema::connection('adms')->create('django_content_type', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('name', 100);
            $table->string('app_label', 100);
            $table->string('model', 100);

            $table->unique(['app_label', 'model'], 'app_label');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::connection('adms')->dropIfExists('django_content_type');
    }
};
