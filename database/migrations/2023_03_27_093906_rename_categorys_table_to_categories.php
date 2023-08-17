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
        Schema::table('categorys', function (Blueprint $table) {
            //
            Schema::rename('categorys', 'categories');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('categorys', function (Blueprint $table) {
            //
            Schema::rename('categories', 'categorys');
        });
    }
};
