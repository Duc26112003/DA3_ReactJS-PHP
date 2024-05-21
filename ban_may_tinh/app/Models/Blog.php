<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;
    protected $table = 'btl_blog'; // tên bảng
    protected $primaryKey = 'id';    // khóa chính
    // Các cột trong bảng
    protected $fillable = [
        'id',
        'title',
        'content',
        'img'
        
    ];


}
