<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

final class Region extends Model
{
    protected $primaryKey = 'id';
    protected $keyType = 'int';
    public $incrementing = true;

    protected $fillable = [
        'created_at',
        'updated_at',
        'name',
    ];

    protected function casts(): array
    {
        return [
            'created_at' => 'datetime',
            'updated_at' => 'datetime',
            'name' => 'string',
        ];
    }
}
