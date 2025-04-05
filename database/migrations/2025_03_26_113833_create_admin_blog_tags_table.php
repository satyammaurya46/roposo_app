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
        Schema::create('admin_blog_tags', function (Blueprint $table) {
            $table->id();
            $table->string('name', 50)->unique(); // Unique tag name
            $table->string('slug', 50)->unique(); // SEO-friendly identifier
            $table->string('description', 255)->nullable(); // Optional description
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('admin_blog_tags');
    }
};
