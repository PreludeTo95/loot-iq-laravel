<?php

declare(strict_types=1);

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('items', function (Blueprint $table) {
            $table->unsignedBigInteger('blizzard_id')->primary();
            $table->string('name');
            $table->unsignedTinyInteger('quality_id');
            $table->unsignedTinyInteger('class_id');
            $table->unsignedTinyInteger('subclass_id');
            $table->unsignedTinyInteger('inventory_type_id');
            $table->unsignedTinyInteger('inventory_type_name_id');
            $table->boolean('is_stackable')->default(false);
            $table->boolean('is_equippable')->default(false);
            $table->unsignedBigInteger('vendor_sell_price_copper')->default(0);
            $table->json('raw_blizzard_data')->nullable();
            $table->unsignedTinyInteger('item_level')->default(0);
            $table->unsignedTinyInteger('required_level')->default(0);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('items');
    }
};
