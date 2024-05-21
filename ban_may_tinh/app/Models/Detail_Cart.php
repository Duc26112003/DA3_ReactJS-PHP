<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Detail_Cart extends Model
{
    use HasFactory;

    protected $table = 'detail_cart'; // tên bảng
    protected $primaryKey = 'product_id';    // khóa chính
    // Các cột trong bảng
    protected $fillable = [
        'product_id',
        'cart_id',
        'quantity',
        'price_by_quantity',
        'created_at',
        'updated_at',
        'id',
    ];
    public function product()
{
    return $this->belongsTo(Product::class,'id');
}
}
