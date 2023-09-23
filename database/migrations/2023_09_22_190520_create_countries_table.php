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
        Schema::create('countries', function (Blueprint $table) {
            $table->id();
            $table->string('country_name');
            $table->string('country_iso2')->nullable();
            $table->string('country_iso3')->nullable();
            $table->string('country_num_code')->nullable();
            $table->string('country_phone_code')->nullable();
            $table->string('country_capital')->nullable();
            $table->string('country_currency')->nullable();
            $table->string('country_region')->nullable();
            $table->string('country_subregion')->nullable();
            $table->string('country_currency_symbol')->nullable();
            $table->string('country_language')->nullable();
            $table->string('country_logo')->nullable();
            $table->string('country_status')->nullable();
            $table->json('country_timezones')->nullable();
            $table->json('country_translations')->nullable();
            $table->json('country_data')->nullable();
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
        Schema::dropIfExists('countries');
    }
};
