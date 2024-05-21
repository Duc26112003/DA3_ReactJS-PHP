<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Detail_Order extends Model
{
    use HasFactory;
    protected $table = 'detail_order'; // tên bảng
    protected $primaryKey = 'iddetail_order';    // khóa chính
    // Các cột trong bảng
    protected $fillable = [
        'iddetail_order',
        'product_name',
        'product_price',
        'product_quantity',
        'id_order',
        'product_id',
    ];
    public function product()
{
    return $this->belongsTo(Product::class, 'id');
}
public $timestamps = false;
}
