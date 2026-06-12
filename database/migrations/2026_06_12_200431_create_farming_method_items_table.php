<?php

declare(strict_types=1);

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('farming_method_items', function (Blueprint $table) {
            $table->id();
            $table->foreignId('farming_method_id')
                ->constrained()
                ->cascadeOnDelete();
            $table->unsignedBigInteger('item_id');
            $table->unsignedInteger('quantity');
            $table->timestamps();

            $table->index(['item_id']);
            $table->index(['farming_method_id']);

            $table->foreign('item_id')->references('blizzard_id')->on('items')->cascadeOnDelete();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('farming_method_items');
    }
};
