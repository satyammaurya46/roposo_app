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
        Schema::create('blog', function (Blueprint $table) {
            $table->id();
            $table->string('blog_title', 255);
            $table->string('blog_content');
            $table->string('featered_image')->nullable();
            $table->string('category')->nullable();
            $table->string('tags', 100)->nullable();
            $table->string('publish_date')->unique();
            $table->boolean('status')->default(1);
            $table->string('url_slug')->unique();
            $table->string('seo_title',70)->nullable();
            $table->string('seo_discreption', 160)->nullable();
            $table->string('author_name');
            $table->string('Excerpt', 255)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('blogs');
    }
};
