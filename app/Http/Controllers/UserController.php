<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserController extends Controller
  {
    function login(Request $req)
    {
          // $req->input(); 
          $user=  User::where(['email'=>$req->email])->first();
          /*
           if (Hash::check($req->password,$user->password == true)){
                  return  0; 
          } else return 1;*/

          if( !$user || !Hash::check($req->password,$user->password))
          {
              //return User::where(['email'=>$req->email])->first();
              return "Username or Password is not matched";
          } else {
              $req->session()->put('user',$user);
              return redirect("/");
          }

    }
  }
