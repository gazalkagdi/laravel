<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
       return DB::select("select * from users");
         
    }
}
