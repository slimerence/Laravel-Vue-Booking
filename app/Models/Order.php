<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = ['order_date','time_slot','tea','customer_id','participants','avg_cost','book_by','comment','conclusion'];
}
