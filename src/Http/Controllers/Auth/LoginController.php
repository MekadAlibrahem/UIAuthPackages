<?php

namespace MekadAlibrahem\Uiauthpackage\Http\Controllers ;

use Illuminate\Http\Request ;
use Illuminate\Support\Facades\Auth;
use MekadAlibrahem\Uiauthpackage\Http\Controllers\Controller;

class LoginController extends Controller 
{
    public function login_handler(Request $request){
        $request()->validate([
            'username' => "required", 
            'password' => 'required'
        ]);

        $credentials = [
            'username' => $request->get('username') ,
            'password'=> $request->get('password')
        ];
        if(Auth::attempt($credentials)){

            return redirect()->route('user.home');
        }else{
            $request->session()->put('login_failer' , 'فشل تسجيل الدخول : كلمة المرور غير صحيحية');
            return redirect()->route('view_login') ;
        }
    }
}



