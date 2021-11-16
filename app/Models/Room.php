<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'is_extend', 'group_id', 'open_day', 'open_hour', 'image', 'order_type', 'time_span'];
}
