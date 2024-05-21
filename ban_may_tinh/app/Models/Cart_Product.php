<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart_Product extends Model
{
    use HasFactory;

    protected $table = 'cart_product'; // tên bảng
    protected $primaryKey = 'id';    // khóa chính
    // Các cột trong bảng
    protected $fillable = [
        'id',
        'customer_id',
        'price',
        'total_money',
        'created_at',
        'updated_at',
    ];

    public function cartId()
    {
        return $this->belongsTo('App\Models\Cart', 'id');
    }
}
