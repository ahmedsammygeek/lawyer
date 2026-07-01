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
        Schema::table('categories', function (Blueprint $table) {
            $table->text('icon');
            $table->text('image');
            $table->longText('title');
            $table->longText('subtitle');
            $table->dropColumn('name');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('categories', function (Blueprint $table) {
            $table->longText('name');
            $table->dropColumn('icon');
            $table->dropColumn('image');
            $table->dropColumn('title');
            $table->dropColumn('subtitle');
        });
    }
};
