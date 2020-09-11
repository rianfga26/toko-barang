<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login(){
        return view('login');
    }

    public function getCode(){
        return view('code');
    }

    public function auth(Request $req){
        if($req->checkbox === 'on'){
            $remember = true;
        }else {
            $remember = false;
        }

        if(\Auth::attempt(['username' => $req->username, 'password' => $req->password], $remember)){
            return redirect(route('admin.dashboad'));
        }else {
            return redirect(route('login'));
        }

    }   

    public function logout(){
        \Auth::logout();

        return redirect(route('login'));
    }

    public function code(Request $request ,$id){
        $user = User::where('id', $id)->first();
        
        $request->validate(['code' => 'required|min:8']);

        if($user->code === $request->code){
            return 'Pesanan Masuk!';
        }

        return 'Pesanan gagal!';
    }


}
