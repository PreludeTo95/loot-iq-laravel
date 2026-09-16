<?php

declare(strict_types=1);

namespace App\Models;

use App\Enums\InventoryType;
use App\Enums\InventoryTypeName;
use App\Enums\ItemClass;
use App\Enums\ItemQuality;
use BackedEnum;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

final class Item extends Model
{
    // Primary Key config
    protected $primaryKey = 'blizzard_id';
    protected $keyType = 'int';
    public $incrementing = false;

    // Basic columns on the table
    protected $fillable = [
        'blizzard_id',
        'name',
        'quality_id',
        'class_id',
        'subclass_id',
        'inventory_type_id',
        'inventory_type_name_id',
        'is_stackable',
        'is_equippable',
        'vendor_sell_price_copper',
        'raw_blizzard_data',
        'item_level',
        'required_level',
    ];

    // Sensitive columns on the table
    protected $hidden = [];

    // Defines how an attribute is computed when accessed via $model->subclass.
    public function getSubclassAttribute(): BackedEnum
    {
        return $this->class_id->resolveSubclass($this->subclass_id);
    }

    // Eloquent relationships
    public function tsmItemSnapshot(): HasMany
    {
        return $this->hasMany(
            TsmItemSnapshot::class,
            'item_id',
            'blizzard_id'
        );
    }

    public function farmingMethodItems(): HasMany
    {
        return $this->hasMany(
            FarmingMethodItem::class,
            'item_id',
            'blizzard_id'
        );
    }

    // Defines the data types used when interacting with the DB
    protected function casts(): array
    {
        return [
            'quality_id'             => ItemQuality::class,
            'class_id'               => ItemClass::class,
            'inventory_type_id'      => InventoryType::class,
            'inventory_type_name_id' => InventoryTypeName::class,
            'is_stackable'           => 'boolean',
            'is_equippable'          => 'boolean',
            'raw_blizzard_data'      => 'array',
        ];
    }
}
