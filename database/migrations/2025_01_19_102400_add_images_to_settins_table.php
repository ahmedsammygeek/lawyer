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
        Schema::table('settings', function (Blueprint $table) {
            $table->text('about_image')->nullable();
            $table->text('about_banner')->nullable();
            $table->text('terms_banner')->nullable();
            $table->text('contact_banner')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('settings', function (Blueprint $table) {
            $table->dropColumn('about_image');
            $table->dropColumn('about_banner');
            $table->dropColumn('terms_banner');
            $table->dropColumn('contact_banner');
        });
    }
};
