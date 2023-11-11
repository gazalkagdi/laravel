<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    //
    public function show(Request $req)
    {
       echo "submitted!";
       return $req -> input();
         
    }
    public function index()
    {
      echo "dbconnection";
      
      return DB::select("SELECT * FROM testt WHERE username = 'gazal' LIMIT 1");
    
    }

    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('username', 'password');
    
        // Assuming 'testt' is the name of your authentication model
        if (Auth::attempt($credentials)) {
            return redirect()->intended('/');
        }
    
        return redirect()->route('login')->with('error', 'Invalid credentials');
    }
    

    public function logout()
    {
        Auth::logout();

        return redirect('/');
    }

}
