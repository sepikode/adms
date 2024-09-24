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
        Schema::connection('adms')->table('user_of_run', function (Blueprint $table) {
            $table->foreign(['user_id'], 'user_of_run_ibfk_1')->references(['userid'])->on('userinfo')->onUpdate('no action')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::connection('adms')->table('user_of_run', function (Blueprint $table) {
            $table->dropForeign('user_of_run_ibfk_1');
        });
    }
};
