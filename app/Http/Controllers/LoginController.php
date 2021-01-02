<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Session;


class LoginController extends Controller
{
    public function login()
    {
        return view('Login.login');
    }

    public function register()
    {
        return view('Login.register');
    }

    public function loginPost(Request $request)
    {
        $emailadmin = $request->emailadmin;
        $password = $request->password;

        $data = User::where('emailadmin',$emailadmin)->first();
        if($data){ //apakah email tersebut ada atau tidak
            if(Hash::check($password,$data->password)){
                Session::put('name',$data->name);
                Session::put('emailadmin',$data->emailadmin);
                Session::put('admin',TRUE);
                return redirect('/dashboard');
            }
            else{
                return redirect('/login')->with('alert','Password atau Email, Salah !');
            }
        }
        else{
            return redirect('/login')->with('alert','Password atau Email, Salah!');
        }
    }

    public function logout(){
        Session::flush();
        $request->session()->forget('password');
        return redirect('login')->with('alert','Kamu sudah logout');
    }

    public function registerPost(Request $request){
        $request->validate([
            'name' => 'required|min:4',
            'emailadmin' => 'required|min:4|email|unique:users',
            'password' => 'required|min:8',
            'confirmation' => 'required|same:password',
        ]);

        $data =  new User();
        $data->name = $request->name;
        $data->emailadmin = $request->emailadmin;
        $data->password = bcrypt($request->password);
        $data->save();

        return redirect('/dashboard')->with('status','Berhasil Register Akun Admin Baru');
    }
}
