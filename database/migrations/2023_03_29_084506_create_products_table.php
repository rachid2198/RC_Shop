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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('nom',200);
            $table->text('description');
            $table->decimal('prix', 8, 2);
            $table->decimal('prix_vente', 8, 2);
            $table->integer('stock');
            $table->integer('stock_fictif');
            $table->string('url_video')->nullable();
            $table->string('fichier_technique')->nullable();

            $table->foreignId('category_id')->nullable()->onDelete('set null');
            $table->foreignId('subcategory_id')->nullable()->onDelete('set null');
            $table->foreignId('brand_id')->nullable()->onDelete('set null');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
