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
        Schema::connection('adms')->table('django_admin_log', function (Blueprint $table) {
            $table->foreign(['content_type_id'], 'content_type_id_refs_id_288599e6')->references(['id'])->on('django_content_type')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['user_id'], 'user_id_refs_id_c8665aa')->references(['id'])->on('auth_user')->onUpdate('no action')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::connection('adms')->table('django_admin_log', function (Blueprint $table) {
            $table->dropForeign('content_type_id_refs_id_288599e6');
            $table->dropForeign('user_id_refs_id_c8665aa');
        });
    }
};
