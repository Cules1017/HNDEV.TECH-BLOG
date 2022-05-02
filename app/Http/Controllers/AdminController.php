<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function loginAdmin(){
        // dd(bcrypt('hieunghia'));
        // if(auth()->check()){
            
        //    return redirect('home');
        // }
       return view('admin.login');
    }
    public function postloginAdmin(Request $request){
       
       $rememberme=$request->has('remember_me') ?true:false;
        if(auth()->attempt([
            'name'=>$request->name,
            'password'=>$request->password,
        ],$rememberme)){
            return redirect('home');
        }
        dd(auth()->attempt([
            'name'=>$request->name,
            'password'=>$request->password,
        ]));
    }
    public function getLogout()
    {
        auth()->logout();
        return redirect('ad');
    }
}
