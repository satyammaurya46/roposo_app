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
        Schema::create('product_click_frequency_from_advanced_searches', function (Blueprint $table) {
            $table->id();
            $table->int('product_id')->nullable();
            $table->int('clicked_count')->nullable();
            $table->text('associated_search')->nullable();
            $table->timestamp('time_period')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product_click_frequency_from_advanced_searches');
    }
};
