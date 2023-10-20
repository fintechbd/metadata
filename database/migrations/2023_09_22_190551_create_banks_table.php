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
            $table->foreignId('country_id');
            $table->foreignId('recipient_type_id')->nullable();
            $table->string('name');
            $table->string('category')->nullable();
            $table->string('transaction_type')->nullable();
            $table->string('currency')->nullable();
            $table->boolean('enabled')->nullable();
            $table->json('bank_data')->nullable();
            $table->foreignId('creator_id')->nullable();
            $table->foreignId('editor_id')->nullable();
            $table->foreignId('destroyer_id')->nullable();
            $table->foreignId('restorer_id')->nullable();
            $table->timestamps();
            $table->softDeletes();
            $table->timestamp('restored_at')->nullable();
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
