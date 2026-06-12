<?php

declare(strict_types=1);

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('tsm_item_snapshots', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('item_id');
            $table->unsignedTinyInteger('region_id');
            $table->unsignedBigInteger('pet_species_id')->nullable();
            $table->timestamp('recorded_at')->nullable();
            $table->unsignedBigInteger('quantity')->default(0);
            $table->unsignedBigInteger('market_value_copper')->default(0);
            $table->unsignedBigInteger('avg_sale_price_copper')->default(0);
            $table->decimal('sale_rate', 8, 4)->default(0);
            $table->decimal('sold_per_day', 8, 4)->default(0);
            $table->unsignedBigInteger('historical_price_copper')->default(0);
            $table->timestamps();

            $table->foreign('item_id')->references('blizzard_id')->on('items')->cascadeOnDelete();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('tsm_item_snapshots');
    }
};
