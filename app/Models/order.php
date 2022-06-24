<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class order extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $table = 'orders';
    protected $fillabel = ['order_id', 'user_id', 'product_id', 'order_date', 'order_status', 'warna', 'desigm_user'];
}
