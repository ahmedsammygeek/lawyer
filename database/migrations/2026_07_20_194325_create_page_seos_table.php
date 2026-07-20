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
        Schema::create('page_seos', function (Blueprint $table) {
            $table->id();
            $table->string('page_name')->nullable();
            $table->longText('page_title')->nullable();
            $table->longText('meta_description')->nullable();
            $table->longText('open_graph_title')->nullable();
            $table->longText('open_graph_description')->nullable();
            $table->text('open_image_url')->nullable();
            $table->text('canonical_url')->nullable();
            $table->tinyInteger('robots_index')->default(1);
            $table->tinyInteger('robots_follow')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('page_seos');
    }
};
