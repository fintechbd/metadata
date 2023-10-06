<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class () extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('bank_branches', function (Blueprint $table) {
            $table->id();
            $table->string('bank_branch_name');
            $table->string('bank_branch_iso2')->nullable();
            $table->string('bank_branch_iso3')->nullable();
            $table->string('bank_branch_num_code')->nullable();
            $table->string('bank_branch_phone_code')->nullable();
            $table->string('bank_branch_capital')->nullable();
            $table->string('bank_branch_currency')->nullable();
            $table->string('bank_branch_region')->nullable();
            $table->string('bank_branch_subregion')->nullable();
            $table->string('bank_branch_currency_symbol')->nullable();
            $table->string('bank_branch_language')->nullable();
            $table->string('bank_branch_logo')->nullable();
            $table->string('bank_branch_status')->nullable();
            $table->json('bank_branch_timezones')->nullable();
            $table->json('bank_branch_translations')->nullable();
            $table->json('bank_branch_data')->nullable();
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
        Schema::dropIfExists('bank_branches');
    }
};
