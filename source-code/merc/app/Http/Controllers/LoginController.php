<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class LoginController extends Controller
{
    public function login()
    {
        return view('user.login');
    }

    public function checkLogin(Request $request)
    {
        $products = Product::all();
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password, 'role' => 'Admin'])) {
            $user = Auth::user();
            $name = $user->name;
            $request->session()->push('login', $name);
            return view('admin.admin', compact('products'));
        }
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password, 'role' => 'User'])) {
            $user = Auth::user();
            $id = $user->id;
            $name = $user->name;
            $email = $user->email;
            $info = [
                $id,
                $email,
                $name
            ];
            $request->session()->push('login', $info);
            return view('user.index');
        }
        $request->session()->flash('login-fail', 'Tài khoản không tồn tại');
        return redirect()->route('login');
    }

    public function logout(Request $request)
    {
        $request->session()->flush();
        return view('user.index');
    }
}
