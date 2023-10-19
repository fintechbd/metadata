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
            $table->foreignId('bank_id')->nullable();
            $table->string('bank_branch_name');
            $table->json('bank_branch_json_data')->nullable();
            $table->json('bank_branch_json_data_value')->nullable();
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
        Schema::dropIfExists('bank_branches');
    }
};
