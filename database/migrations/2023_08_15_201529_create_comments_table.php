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
    Schema::create('comments', function (Blueprint $table) {
   // Schema::disableForeignKeyConstraints();
    $table->id();
    $table->foreignId('user_id')->nullable()->constrained('users')->cascadeOnDelete();
    $table->foreignId('post_id')->nullable()->constrained('posts')->cascadeOnDelete();
    $table->text('text');
    $table->boolean('is_approved');// A field indicating whether or not the comment has been approved
    $table->text('content');
    $table->timestamps();
   // Schema::enableForeignKeyConstraints();
});
Schema::enableForeignKeyConstraints();
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('comments');
    }
};
