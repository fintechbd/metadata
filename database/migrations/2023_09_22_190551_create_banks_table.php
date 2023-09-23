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
        Schema::create('banks', function (Blueprint $table) {
            $table->id();
            $table->string('bank_name');
            $table->string('bank_iso2')->nullable();
            $table->string('bank_iso3')->nullable();
            $table->string('bank_num_code')->nullable();
            $table->string('bank_phone_code')->nullable();
            $table->string('bank_capital')->nullable();
            $table->string('bank_currency')->nullable();
            $table->string('bank_region')->nullable();
            $table->string('bank_subregion')->nullable();
            $table->string('bank_currency_symbol')->nullable();
            $table->string('bank_language')->nullable();
            $table->string('bank_logo')->nullable();
            $table->string('bank_status')->nullable();
            $table->json('bank_timezones')->nullable();
            $table->json('bank_translations')->nullable();
            $table->json('bank_data')->nullable();
            $table->unsignedBigInteger('creator_id')->index()->nullable();
            $table->unsignedBigInteger('editor_id')->index()->nullable();
            $table->unsignedBigInteger('destroyer_id')->index()->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('banks');
    }
};
