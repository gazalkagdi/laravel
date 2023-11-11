<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

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
        
        $user = DB::table('testt')->where('username', $credentials['username'])->first();

        if ($user && $credentials['password'] === $user->password) {
            // Authentication successful
            return redirect()->route('login')->with('error', 'Login successful');
        }

        // Authentication failed
        return redirect()->route('login')->with('error', 'Invalid credentials');
    }
    

    public function logout()
    {
        Auth::logout();

        return redirect('/');
    }

}
