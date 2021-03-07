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
            $email = $req->input('email');
            $password = $req->input('password');
            $user=  User::where(['email'=>$req->email])->first();
            
            echo $req->password . "<br>";
            echo $user->password  . "<br>";
            
            //$user = User::where('email', '=', $email)->first();
            
            //print $req->input();
           /* echo $user->password . "<br>";
            
            if (!Hash::check($req->password,$user->password)){
                  echo $req->password;
                   echo $user->password;
                   echo "login fail ";
                   return  0; 
              } else  
                    echo $req->password;
                    echo $user->password;
                   echo "login ok ";
                   return 1;
          
             if ($user==true){
                    return 0;
             }else return 1;
            */
            
            if (!$user){
                echo 'user false';
            }else {
                echo 'user true';
            }

            if(!Hash::check($req->password, $user->password))
             {
              echo 'user false';
            } else{
              echo 'user true';
            }
          
            if(!$user || !Hash::check($req->password,$user->password))
            {
                //return User::where(['email'=>$req->email])->first();
                return "Username or Password is not matched";
            } else {
                $req->session()->put('user',$user);
                return redirect("/");
            }

       }
  

      function register(Request $req){
        // return $req->input();
        $user = new User;
        $user->name = $req->name;
        $user->email= $req->email;
        $user->password= Hash::make($req->password);
        $user->save();
        return redirect('/login');

      
    }
  }