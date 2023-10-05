<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Video extends Model
{
    use HasFactory, Notifiable;

    protected $table = 'videos';

    protected $fillable = [
        'title', 'video'
    ];
}
