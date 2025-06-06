<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Coverage extends Model
{
    use HasFactory;

    protected $fillable = [
        'vehicle_id',
        'type',
        'limit',
        'deductible'
    ];

    public function vehicle()
    {
        return $this->belongsTo(Vehicle::class);
    }
}
