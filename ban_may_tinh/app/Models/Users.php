<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    use HasFactory;

    protected $table = 'users'; // Tên bảng trong cơ sở dữ liệu
    protected $primaryKey = 'id_users';


    // Các cột được phép gán giá trị
    protected $fillable = ['id_users','name', 'taikhoan', 'email', 'sodienthoai', 'diachi'];
}
