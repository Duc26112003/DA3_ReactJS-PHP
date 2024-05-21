<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Gloudemans\Shoppingcart\Facades\Cart;
use App\Models\Product; // Import model Product
use App\Models\Blog;

class HomeController extends Controller
{
    public function index()
    {
    $sp = \App\Models\Product::all();
    return response()->json($sp);
    }
    public function introduce(){
        return view('FE.introduce');
    }

    

    public function watchall()
    {
        return view('FE.watchall');
    }
    public function BlogDetail($id)
    {
        $blog_detail = DB::table('btl_blog')
        ->where('id',$id)
        ->select('btl_blog.*')
        ->get();
        return view('FE.BlogDetail',compact('blog_detail'));
    }
    
}
