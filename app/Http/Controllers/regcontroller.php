<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//for email send
//email location
use App\Mail\verify;
use Illuminate\Support\Facades\Mail;

//modal location for check
use App\User;
//for getting time
use Carbon\Carbon;


class regcontroller extends Controller
{


    public function validation(){



        //get email from DB
        $email = User::select('email')->where('email',request('email'))->first();
        
        if ($email === null) {
            
            //if alredy not registered

            //validate passwords
            $val=request()->validate([
                'password' => 'min:8',
                'confirmed' => 'required_with:password|same:password'
                ]);

            //genarate validation code
            $code = str_pad(rand(0, pow(10, 4)-1), 4    , '0', STR_PAD_LEFT);   

            //send verification email with validation code
            Mail::to(request('email'))->send(new verify($code));

            // assign registration data to a session
            $fname=session()->put('1',request('fname'));
            $lname=session()->put('2',request('lname'));
            $spcode=session()->put('3',request('spcode'));
            $email=session()->put('4',request('email'));
            $password=session()->put('5',request('password'));
            $vcode=session()->put('6',$code);
    
            //load verification page
            return view('earn.reg2');
        }

        else{

            //already registered
            return back()->with('alredyin','You are already registered!');
        }
        
    }


    public function store(){

               
        //get data from session
        $fname=request()->session()->get('1');
        $lname=request()->session()->get('2');
        $spcode=request()->session()->get('3');
        $email=request()->session()->get('4');
        $password=request()->session()->get('5');
        $code=request()->session()->get('6');

        

        //check verification code
        if(request('vrify')==$code){
            //correct verification code

            //clear session variable
            request()->session()->pull('fail', 'incorrectcode');   

            //generate user code (sponsercode)
            $now = Carbon::now();
            $ucode1 = $now->format('mYdHisu');
            $ucode= dechex($ucode1);
  
            $x=User::select('ucode')->where('ucode',$ucode)->first();

            //chek if generated code (sponser code) already exsist
            while ($x!=null){
                $now = Carbon::now();
                $ucode1 = $now->format('mYdHisu');
                $ucode= dechex($ucode1);
            }

            //Store data in DB
            $User=new \App\User();
            $User->fname=$fname;
            $User->lname=$lname;
            $User->spcode=$spcode;
            $User->email=$email;
            $User->ucode=$ucode;
            $User->password=$password;  
            $User->save();

            //session variable
            request()->session()->flash('success', 'success');
            return view('earn.reg2');
           
        }
        else{
            //incorrect verification code

            //session variable
            request()->session()->flash('fail', 'incorrectcode');
            return view('earn.reg2');
       
        }
    } 

}
