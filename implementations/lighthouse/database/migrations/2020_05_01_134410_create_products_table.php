<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->string('id')->unique();
            $table->string('sku')->nullable();
            $table->string('package')->nullable();
            $table->string('variation')->nullable();
            $table->json('dimensions')->nullable();
            $table->string('createdByUserEmail')->nullable();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
}
