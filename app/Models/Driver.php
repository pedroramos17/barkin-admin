<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Driver extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'rg',
        'phone'
    ];

    public function vehicles(): HasMany {
        return $this->hasMany(Vehicle::class);
    }

    public function gateways(): BelongsToMany {
        return $this->belongsToMany(Gateway::class)->using(DriverGateway::class);
    }
}
