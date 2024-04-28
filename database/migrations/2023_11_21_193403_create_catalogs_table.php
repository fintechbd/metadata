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
        Schema::create('catalogs', function (Blueprint $table) {
            $table->id();
            $table->string('type');
            $table->string('name');
            $table->string('code')->nullable();
            $table->boolean('enabled')->default(true);
            $table->json('catalog_data')->nullable();
            $table->json('vendor_code')->nullable();
            $table->foreignId('creator_id')->nullable();
            $table->foreignId('editor_id')->nullable();
            $table->foreignId('destroyer_id')->nullable();
            $table->foreignId('restorer_id')->nullable();
            $table->timestamps();
            $table->softDeletes();
            $table->timestamp('restored_at')->nullable();
        });

        Schema::create('catalog_country', function (Blueprint $table) {
            $table->foreignId('catalog_id')->nullable();
            $table->foreignId('country_id')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('catalogs');

        Schema::dropIfExists('catalog_country');
    }
};
