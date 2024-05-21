<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Images extends Model
{
    
    use HasFactory;

    protected $primaryKey = 'id_sanpham';

        // Các cột được phép gán giá trị
        protected $fillable = ['id_sanpham','More_img'];
}
