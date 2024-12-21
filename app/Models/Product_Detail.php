<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product_Detail extends Model
{
    use HasFactory;
    protected $table='products_details';
    protected $fillable = ['name','price','quantity','image','product_id','created_by'];

    public function product()
    {
       return $this->belongsTo(Product::class,'product_id');
    }
}
