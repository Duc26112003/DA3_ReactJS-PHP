<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $table = 'oders';
    protected $primaryKey = 'idoders'; 
    protected $fillable = [
        'ho_ten',   
        'tinh',
        'dia_chi',
        'dienthoai',
        'email',
        'thongtin',
        
    ];
}
