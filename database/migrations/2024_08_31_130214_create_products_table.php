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
            $table->string('name')->unique();
            $table->string('image')->unique();
            $table->string('parcode')->unique();
            $table->foreignId('item_categories_id')->constrained()->cascadeOnDelete();
            $table->double('price1');
            $table->double('price2');
            $table->double('points1');
            $table->double('points2');
            $table->double('points_price');
            $table->boolean('active')->default(1);
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
