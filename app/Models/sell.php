<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sell extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $table = 'sells';
    protected $fillabel = ['sell_id', 'user_id', 'ketebalan', 'berat', 'kondisi', 'sell_date', 'sell_status'];
}
