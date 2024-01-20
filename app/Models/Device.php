<?php

namespace App\Models;

use App\Models\Order;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Device extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function manufacturers(): HasMany
    {
        return $this->hasMany(Manufacturer::class);
    }

    public function orders()
    {
        return $this->hasMany(Order::class, 'device_id', 'id');
    }
}
