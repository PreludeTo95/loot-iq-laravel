<?php

declare(strict_types=1);

namespace App\Models;

use App\Models\FarmingMethod;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Carbon;

final class User extends Model
{
    protected $primaryKey = 'id';
    protected $keyType = 'int';
    public $incrementing = true;

    protected $fillable = [
        'email',
        'created_at',
        'updated_at',
        'region_id',
    ];

    protected $hidden = [
        'password',
    ];

    public function farmingMethods(): HasMany
    {
        return $this->hasMany(FarmingMethod::class);
    }

    public function region(): BelongsTo
    {
        return $this->belongsTo(Region::class);
    }

    protected function casts(): array
    {
        return [
            'email' => 'string',
            'created_at' => 'datetime',
            'updated_at' => 'datetime',
            'region_id' => 'int',
            'password' => 'hashed',
        ];
    }
}
