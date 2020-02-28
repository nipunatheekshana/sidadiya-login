<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
//modal location for check
use App\User;

class testcontroller extends Controller
{


   public function uid(){


    
      $now = Carbon::now();
      $ucode1 = $now->format('mYdHisu');
      $ucode= dechex($ucode1);

      $x=User::select('ucode')->where('ucode',$ucode)->first();
   
      while ($x!=null){

         $now = Carbon::now();
         $ucode1 = $now->format('mYdHisu');
         $ucode= dechex($ucode1);
      }
   
         dd($ucode);


   }
}
