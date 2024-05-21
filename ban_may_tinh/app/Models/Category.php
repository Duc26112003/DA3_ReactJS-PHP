<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $table = 'products'; // tên bảng
    protected $primaryKey = 'id_sanpham';    // khóa chính
    // Các cột trong bảng
    protected $fillable = [
        'id_sanpham',
        'tensanpham',
        'masanpham',
        'giasanpham',
        'soluong',
        'hinhanh',
        'tomtat',
        'noidung',
        'id_danhmuc',
        'trangthai',
        
    ];
}
