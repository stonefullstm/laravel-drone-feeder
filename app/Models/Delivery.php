<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Notifications\Notifiable;

class Delivery extends Model
{
    use HasFactory, Notifiable;

    protected $fillable = [
        'latitude', 'longitude', 'data_entrega', 'status', 'drone_id', 'video_id'
    ];

    public function video(): HasOne
    {
        return $this->hasOne(Video::class);
    }
}
