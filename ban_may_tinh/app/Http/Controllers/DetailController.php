<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

use Illuminate\Support\Facades\DB;

class DetailController extends Controller
{
    public function showProduct($id_sanpham) {
        $products = DB::table('products')
            ->where('id_sanpham', '=', $id_sanpham) // Sử dụng products.id để tìm kiếm sản phẩm
            ->get(); 
        
        return view("FE.detail", ['products' => $products]);
    }
    
    
}
    //     dd($products->all());
    //     $products = Product::all(); 
    //     return view('FE.detail', compact('products'));
    // }
    

