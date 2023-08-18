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
        Schema::create('posts', function (Blueprint $table) {
            Schema::disableForeignKeyConstraints();
            $table->id();
            $table->foreignId('user_id')->nullable()->constrained('statuses');
            $table->text('content');
            $table->foreignId('status_id')->nullable()->constrained('statuses')->cascadeOnDelete();
            $table->string('title');
            $table->boolean('is_featured');
            $table->integer('views_count')->default(0);
            $table->string('image')->nullable();
            $table->timestamps();
            Schema::enableForeignKeyConstraints();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
