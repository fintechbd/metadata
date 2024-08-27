<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('currencies', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('code');
            $table->string('native')->nullable();
            $table->unsignedTinyInteger('precision')->default(2);
            $table->smallInteger('subunit')->default(100);
            $table->string('symbol')->nullable();
            $table->boolean('symbol_first')->default(false);
            $table->string('decimal_mark')->default('.');
            $table->string('thousands_separator')->default(',');
            $table->string('color')->nullable();
            $table->boolean('enabled')->default(true);
            $table->json('vendor_code')->nullable();
            $table->json('currency_data')->nullable();
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
        Schema::dropIfExists('currencies');
    }
};
