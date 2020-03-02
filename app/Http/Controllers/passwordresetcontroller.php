<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//for email send
//email location
use App\Mail\verify;
use App\Mail\Pwreset;
use Illuminate\Support\Facades\Mail;
//modal location for check
use App\User;
use App\Resettoken;
//for getting time
use Carbon\Carbon;

class passwordresetcontroller extends Controller
{

    public function reset(){

        //check if email is registered
        $email = User::select('email')->where('email',request('forgot'))->first();

        if($email!=null){
            //email is registered

            //getting users id
            $id = User::select('id')->where('email',$email->email)->first();

            //check if the link is already sent
            $uid = Resettoken::select('uid')->where('uid',$id->id)->first();

            if($uid==null){
            //if the link is not alredy sent
            
            //generating verification token
            $now = Carbon::now();
            $token1 = $now->format('mYdHisu');
            $token= dechex($token1);
            
            //check if the token already exsist
            $x=Resettoken::select('uid')->where('token',$token)->first();
            while ($x!=null){
                //if the token alredy exsist
                $now = Carbon::now();
                $token1 = $now->format('mYdHisu');
                $token= dechex($token1);
            }

            //the link
            $link=url("http://127.0.0.1:8000/login/{$token}/edit");

            //saving the reset token in the data base
            $rtoken=new \App\Resettoken();
            $rtoken->uid=$id->id;
            $rtoken->token=$token; 
            $rtoken->save();

            //send verification link email 
            Mail::to(request('forgot'))->send(new Pwreset($link));

            return back()->with('done', 'success');

            }
            else{

                //if link is already sent
                return back()->with('users', 'success');
              
            }
            

        }
        else{
            //if user not exsist
            return back()->with('usern', 'success');
             
        }
        
    }
    public function edit($Token){

        //validating the token
        $id = Resettoken::select('uid')->where('token',$Token)->first();
        if($id!=null){

            $uid=$id->uid;
            return view('password.passwordreset',compact('uid'));
        }
        else{
            return redirect('/expire');
        }
       

    }
    public function update($id){

        //resetting the password
        $update=User::where('id', $id)->update( array('password'=>request('newpassword')));

        //delete password reset token
        Resettoken::where('uid', $id)->delete();

        $uid=$id;

        if($update = 1){


            request()->session()->flash('success', 'success');
            return view('password.passwordreset',compact('uid'));
        }
        else{

            request()->session()->flash('fail', 'fail');
            return view('password.passwordreset',compact('uid'));
            
        }
       

    }
    
    
}
