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
            $table->string('title');
            $table->decimal('price', 8, 2);
            $table->text('description');
            $table->foreignId('category_id')->constrained('categories');
            $table->string('image');
            $table->decimal('rating_rate', 2, 1)->nullable(); // Permitir nulo, 2 dígitos en total, 1 decimal, adecuado para valores de 0.0 a 5.0
            $table->integer('rating_count')->nullable();      // Permitir nulo, campo entero para el conteo
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
