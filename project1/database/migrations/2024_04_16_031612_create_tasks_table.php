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
        Schema::create('tasks', function (Blueprint $table) {
            $table->id();
            $table->String('name');
            $table->longText('description')->nullable();
            $table->String('image_path')->nullable();
            $table->String('status');
            $table->timestamp('due_date')->nullabll();
            $table->String('priority');
            $table->foreignId('assinged_user_id')->constrained('users');
            $table->foreignId('created-by')->constrained('users');
            $table->foreignId('updated-by')->constrained('users');
            $table->foreignId('project_id')->constrained('project');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tasks');
    }
};
