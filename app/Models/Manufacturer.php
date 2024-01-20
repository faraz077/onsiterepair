<?php

namespace App\Models;

use App\Models\Model;
use App\Models\Order;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Manufacturer extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function device(): BelongsTo
    {
        return $this->belongsTo(Device::class);
    }

    public function models(): HasMany
    {
        return $this->hasMany(Model::class);
    }

    public function orders()
    {
        return $this->hasMany(Order::class, 'manufacturer_id', 'id');
    }
}
