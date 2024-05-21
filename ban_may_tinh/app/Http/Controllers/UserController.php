<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Users;
use App\Models\Cart_Product;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

use function Laravel\Prompts\alert;

class UserController extends Controller
{
    public function login()
    {
        return view('login');
    }
    public function register()
    {
        return view('register');
    }
    public function postRegister(Request $req)
    {
        // validate
        $req->merge(['password' => Hash::make($req->password)]);

        try {
            $user = User::create($req->all());
            if($user){
                Cart_Product::create([
                    'customer_id' => $user->id,
                ]);
            }
    
        } catch (\Throwable $th) {
            dd($th);
        }
        return redirect()->route('login');
    }
    public function postLogin(Request $req)
    {
        if (Auth::attempt(['email' => $req->email, 'password' => $req->password])) {
            return redirect()->route('FE.index');
        } else {
            return redirect()->back()->with('Err', 'Sai tai khoan hoac mat khau');
        }
    }
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('login');
    }


    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            // Xác thực thành công
            $user = Auth::user();
            if ($user->role == 1) {
                // Nếu là admin, chuyển hướng đến trang admin
                return redirect()->route('layouts.admin');
            } else {
                // Nếu là user, chuyển hướng đến trang user
                return redirect()->route('FE.index');
            }
        } else {
            // Xác thực không thành công
            return back()->withErrors([
                'email' => 'Sai tài khoản hoặc mật khẩu',
            ])->onlyInput('email');
        }
    }
    public function Customer()
    {
        $customer = Users::all();
        return view('Cus.customer', ['customer' => $customer]);
    }


    // public function deleteCustomer(string $id_users)
    // {
    //     $customer = Users::find($id_users);
    //     $customer->delete();
    //     return redirect()->route('customer.customer')->with('success', 'Xóa thành công');
    // }
    public function deleteCustomer(string $id_users)
    {
        $customer = Users::find($id_users); // Replace 'id' with the actual primary key column name

        if ($customer) {
            $customer->delete();
            return redirect()->route('Cus.customer')->with('success', 'Xóa thành công');
        } else {
            // Handle case where customer is not found (optional)
            return redirect()->route('Cus.customer')->with('error', 'Không tìm thấy khách hàng!');
        }
    }
}
