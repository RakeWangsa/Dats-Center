<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class LoginController extends Controller
{
    public function index()
    {
        return view('login.index', [
            'title' => 'Dats Center - Login'
        ]);
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        
        $email=$request->email;
        $role = DB::table('users')
        ->where('email', $email)
        ->pluck('role')
        ->first();

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            session(['email' => $email]);
            if($role=='admin'){
                return redirect('/home/admin');
            }elseif($role=='admin2'){
                return redirect('/home/admin2');
            }else{
                return redirect('/home');
            }
        }
        return back()->with('loginError','Login Failed!');
    }

    public function logout(Request $request)
    {
        Auth::logout();
    
        $request->session()->invalidate();
    
        $request->session()->regenerateToken();
    
        return redirect('/login');
    }
}
