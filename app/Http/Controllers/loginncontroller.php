<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//modal location for check
use App\User;

class loginncontroller extends Controller
{


    public function log(){  

        //clear session
        request()->session()->forget(['pw','email']);

        //get input email from db
        $email=User::select('email')->where('email',request('email'))->first();

        //check input maill
        if($email!=null){
            //correct email

            //getting id and password for the input mail
            $id = User::select('id')->where('email',request('email'))->first();
            $password = User::select('password')->where('id',$id->id)->first();

            //validate password
            if (request('password')==$password->password){ 
                //correct password and email
                //redirect to loged in users

                dd($id->id,$password->password);
            }
            else{

                //Wrong password
                return back()->with('pw', 'password');
                return view('login');
            }
        }
        else{
            
            //wrong email
            return back()->with('email', 'email');
            return view('login');
        }
    }
    
}
