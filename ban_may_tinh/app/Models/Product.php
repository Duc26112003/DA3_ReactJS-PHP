<?php

    namespace App\Models;

    use Illuminate\Database\Eloquent\Factories\HasFactory;
    use Illuminate\Database\Eloquent\Model;

    class Product extends Model
    {
        protected $primaryKey = 'id_sanpham';

        // Các cột được phép gán giá trị
        protected $fillable = ['id_sanpham', 'tensanpham', 'giasanpham', 'soluong', 'hinhanh', 'tomtat', 'noidung', 'More_img'];

        // Các mối quan hệ với các mô hình khác
        public function getImageNamesAttribute()
        {
            return explode(',', $this->attributes['More_img']);
        }
    }
