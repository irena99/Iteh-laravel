<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    function login(Request $req){
       $user= User::where(['email'=>$req->email])->first();
        if(!$user){
            return "Korisnik ne postoji.";
        }
        elseif(!Hash::check($req->password,$user->password)){
            
            return "Lozinka nije ispravna.";
        }
        else{
            $req->session()->put('user',$user);
            return redirect('/');
        }
    }
    function register(Request $req)
    {
        //return $req->input();
        $user = new User;
        $user->name=$req->name;
        $user->surname=$req->surname;
        $user->username=$req->username;
        $user->email=$req->email;
        $user->password=Hash::make($req->password);
        $user->save();
       return redirect('/login');
    }
}