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
        Schema::connection('adms')->create('template', function (Blueprint $table) {
            $table->integer('templateid', true);
            $table->integer('userid')->index('template_userid');
            $table->longText('Template');
            $table->smallInteger('FingerID');
            $table->smallInteger('Valid');
            $table->smallInteger('DelTag');
            $table->string('SN', 20)->nullable()->index('template_sn');
            $table->dateTime('UTime')->nullable();
            $table->longText('BITMAPPICTURE')->nullable();
            $table->longText('BITMAPPICTURE2')->nullable();
            $table->longText('BITMAPPICTURE3')->nullable();
            $table->longText('BITMAPPICTURE4')->nullable();
            $table->smallInteger('USETYPE')->nullable();
            $table->longText('Template2')->nullable();
            $table->longText('Template3')->nullable();

            $table->unique(['userid', 'FingerID'], 'userfinger');
            $table->unique(['userid', 'FingerID'], 'userid');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::connection('adms')->dropIfExists('template');
    }
};
