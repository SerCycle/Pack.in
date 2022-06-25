<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class shipment extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $table = 'shipments';
    protected $fillabel = ['shipment_id', 'payment_id', 'shipment_date', 'resi_pengiriman'];
}
