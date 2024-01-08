<?php

namespace App\Models;

use App\Models\Model;
use App\Models\Device;
use App\Models\Technician;
use App\Models\Manufacturer;
use App\Models\OrderedIssue;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model as EloquentModel;

class Order extends EloquentModel
{
    use HasFactory;
    protected $guarded = [];

    public function orderedIssues()
    {
        return $this->hasMany(OrderedIssue::class, 'order_id', 'id');
    }

    public function device()
    {
        return $this->belongsTo(Device::class, 'device_id', 'id');
    }

    public function manufacturer()
    {
        return $this->belongsTo(Manufacturer::class, 'manufacturer_id', 'id');
    }

    public function model()
    {
        return $this->belongsTo(Model::class, 'model_id', 'id');
    }

    public function technician()
    {
        return $this->belongsTo(Technician::class);
    }

}
