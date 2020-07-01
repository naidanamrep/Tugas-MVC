<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function register(){
        return view('register');
    }

    public function welcome(){
        return view('welcome');
    }

    public function welcome_post(Request $request){
        $fname = $request["fname"]; $lname = $request["lname"];
        $fname[0] = strtoupper($fname[0]); $lname[0] = strtoupper($lname[0]); 

        $head = "<h1> Selamat Datang $fname $lname</h1>";
        $tail = "<h3>Terima kasih telah bergabung dengan SanberBook. Social media kita bersama!</h3>";
        return $head ."<br>". $tail;
    }
}
