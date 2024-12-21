<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order_Detail extends Model
{
    use HasFactory;
    protected $table='orders_details';
    protected $fillable = ['price','quantity','discount','order_id'];
    public function order()
    {
       return $this->belongsTo(Order::class,'order_id');
    }
}
