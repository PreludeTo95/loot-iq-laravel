<?php

declare(strict_types=1);

namespace App\Enums;

enum InventoryType: string
{
    case Ammo           = 'AMMO';
    case Bag            = 'BAG';
    case Body           = 'BODY';
    case Chest          = 'CHEST';
    case Cloak          = 'CLOAK';
    case Feet           = 'FEET';
    case Finger         = 'FINGER';
    case Hand           = 'HAND';
    case Head           = 'HEAD';
    case Holdable       = 'HOLDABLE';
    case Legs           = 'LEGS';
    case Neck           = 'NECK';
    case NonEquip       = 'NON_EQUIP';
    case ProfessionGear = 'PROFESSION_GEAR';
    case ProfessionTool = 'PROFESSION_TOOL';
    case Ranged         = 'RANGED';
    case RangedRight    = 'RANGEDRIGHT';
    case Robe           = 'ROBE';
    case Shield         = 'SHIELD';
    case Shoulder       = 'SHOULDER';
    case Tabard         = 'TABARD';
    case Thrown         = 'THROWN';
    case Trinket        = 'TRINKET';
    case TwoHWeapon     = 'TWOHWEAPON';
    case Waist          = 'WAIST';
    case Weapon         = 'WEAPON';
    case WeaponMainHand = 'WEAPONMAINHAND';
    case Wrist          = 'WRIST';

    public function label(): string
    {
        return match ($this) {
            self::Ammo           => 'Ammo',
            self::Bag            => 'Bag',
            self::Body           => 'Shirt',
            self::Chest          => 'Chest',
            self::Cloak          => 'Back',
            self::Feet           => 'Feet',
            self::Finger         => 'Finger',
            self::Hand           => 'Hands',
            self::Head           => 'Head',
            self::Holdable       => 'Held In Off-hand',
            self::Legs           => 'Legs',
            self::Neck           => 'Neck',
            self::NonEquip       => 'Non-equippable',
            self::ProfessionGear => 'Profession Equipment',
            self::ProfessionTool => 'Profession Tool',
            self::Ranged         => 'Ranged',
            self::RangedRight    => 'Ranged',
            self::Robe           => 'Chest',
            self::Shield         => 'Off Hand',
            self::Shoulder       => 'Shoulder',
            self::Tabard         => 'Tabard',
            self::Thrown         => 'Thrown',
            self::Trinket        => 'Trinket',
            self::TwoHWeapon     => 'Two-Hand',
            self::Waist          => 'Waist',
            self::Weapon         => 'One-Hand',
            self::WeaponMainHand => 'Main Hand',
            self::Wrist          => 'Wrist',
        };
    }

    /**
     * The deduplicated display-name enum case for this inventory type.
     */
    public function getDisplayName(): InventoryTypeName
    {
        return match ($this) {
            self::Ammo                      => InventoryTypeName::Ammo,
            self::Bag                       => InventoryTypeName::Bag,
            self::Body                      => InventoryTypeName::Shirt,
            self::Chest                     => InventoryTypeName::Chest,
            self::Cloak                     => InventoryTypeName::Back,
            self::Feet                      => InventoryTypeName::Feet,
            self::Finger                    => InventoryTypeName::Finger,
            self::Hand                      => InventoryTypeName::Hands,
            self::Head                      => InventoryTypeName::Head,
            self::Holdable                  => InventoryTypeName::HeldInOffHand,
            self::Legs                      => InventoryTypeName::Legs,
            self::Neck                      => InventoryTypeName::Neck,
            self::NonEquip                  => InventoryTypeName::NonEquippable,
            self::ProfessionGear            => InventoryTypeName::ProfessionEquipment,
            self::ProfessionTool            => InventoryTypeName::ProfessionTool,
            self::Ranged, self::RangedRight => InventoryTypeName::Ranged,
            self::Robe                      => InventoryTypeName::Chest,
            self::Shield                    => InventoryTypeName::OffHand,
            self::Shoulder                  => InventoryTypeName::Shoulder,
            self::Tabard                    => InventoryTypeName::Tabard,
            self::Thrown                    => InventoryTypeName::Thrown,
            self::Trinket                   => InventoryTypeName::Trinket,
            self::TwoHWeapon                => InventoryTypeName::TwoHand,
            self::Waist                     => InventoryTypeName::Waist,
            self::Weapon                    => InventoryTypeName::OneHand,
            self::WeaponMainHand            => InventoryTypeName::MainHand,
            self::Wrist                     => InventoryTypeName::Wrist,
        };
    }
}
