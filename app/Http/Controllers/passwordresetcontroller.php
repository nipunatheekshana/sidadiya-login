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

class passwordresetcontroller extends Controller
{

    public function reset(){


        $email = User::select('email')->where('email',request('forgot'))->first();

        if($email!=null){

            $id = User::select('id')->where('email',$email->email)->first();
            $link='mw';
            //send verification link email 
            Mail::to(request('forgot'))->send(new Pwreset($link));
        }
        else{

            
        }
        
    }
    
}
