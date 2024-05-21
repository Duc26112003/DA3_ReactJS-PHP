<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Product;

class WatchAllController extends Controller
{
    public function watchall()
    {
        $products = Product::paginate(12); // Lấy 12 sản phẩm cho mỗi trang
    
        return view('FE.watchall', ['products' => $products]);
    }
    
}
