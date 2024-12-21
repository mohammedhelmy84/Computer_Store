<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $table='orders';
    protected $fillable = ['user_id'];

    public function products()
    {
        return $this->belongsToMany(Product::class);
    }

    public function order()
    {
       return $this->hasMany(Order_Detail::class,'order_id');
    }

    public function user()
    {
       return $this->belongsTo(User::class,'user_id');
    }
}
