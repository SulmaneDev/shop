<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'email',
        'phone',
        'image',
        'address',
        'shipping_address',
        'city',
        'code',
        'user_id',
    ];

    protected $casts = [
        'user_id' => 'integer',
    ];
    
    public function user() {
        return $this->belongsTo(User::class);
    }

    public function purchases() {
        return $this->hasMany(Purchase::class);
    }
}
