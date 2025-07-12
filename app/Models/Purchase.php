<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Purchase extends Model
{
    protected $fillable = [
        "imeis",
        "user_id",
        "price",
        "tax",
        "shipping",
        "description",
        "supplier_id",
        "customer_id",
        "order_tax",
        "brand_id",
        "product_id",
        'qty',
    ];

    protected $casts = [
        "imeis"=> "array",
        "user_id"=> "integer",
        "price"=> "float",
        "tax"=> "float",
        "shipping"=> "float",
        "supplier_id"=> "integer",
        "customer_id"=> "integer",
        "order_tax"=> "float",
        "brand_id"=> "integer",
        "product_id"=> "integer",
        'qty'=>"integer",
    ];


    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function supplier()
    {
        return $this->belongsTo(Supplier::class);
    }

    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }

    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }

    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    
}
