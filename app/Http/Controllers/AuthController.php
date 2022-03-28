<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $validate = User::where('username',$request->username)->first();
        if(!empty($validate) && Hash::check($request->password, $validate->password)){
            if($validate->status == "adminGudang"){
                session(['login_berhasil' => true ]);
                return redirect()->route('log');
            }else{
                return 'marketing';
            }
        }
        return redirect()->route('home')->with('warning', 'login gagal');
    }
}
