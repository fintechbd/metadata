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
        Schema::create('banks', function (Blueprint $table) {
            $table->id();
            $table->foreignId('country_id')->nullable();
            //$table->foreignId('recipient_type_id')->nullable();
            $table->string('bank_name');
            $table->string('bank_category')->nullable();
            $table->string('bank_transaction_type')->nullable();
            $table->string('bank_currency')->nullable();
            $table->json('bank_data')->nullable();
            $table->boolean('enabled')->nullable();
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
