<?php

declare(strict_types=1);

namespace App\Enums;

enum InventoryTypeName: string
{
    case Ammo                = 'Ammo';
    case Bag                 = 'Bag';
    case Shirt               = 'Shirt';
    case Chest               = 'Chest';
    case Back                = 'Back';
    case Feet                = 'Feet';
    case Finger              = 'Finger';
    case Hands               = 'Hands';
    case Head                = 'Head';
    case HeldInOffHand       = 'Held In Off-hand';
    case Legs                = 'Legs';
    case Neck                = 'Neck';
    case NonEquippable       = 'Non-equippable';
    case ProfessionEquipment = 'Profession Equipment';
    case ProfessionTool      = 'Profession Tool';
    case Ranged              = 'Ranged';
    case OffHand             = 'Off Hand';
    case Shoulder            = 'Shoulder';
    case Tabard              = 'Tabard';
    case Thrown              = 'Thrown';
    case Trinket             = 'Trinket';
    case TwoHand             = 'Two-Hand';
    case Waist               = 'Waist';
    case OneHand             = 'One-Hand';
    case MainHand            = 'Main Hand';
    case Wrist               = 'Wrist';
}
