<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class payment extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $table = 'payments';
    protected $fillabel = ['payment_id', 'order_id', 'payment_verification'];
}
