<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Carform;
use App\Bikeform;
use App\Mobileform;
use App\Laptopform;
use Illuminate\Support\Facades\DB;

class RenewalController extends Controller
{
    public function check(Request $request){

      if ($request->Item=='car') {
          $id=$request->id;
         $post=Carform::find($id);
         if(empty($post))
          return view('renewal');

      }
      if ($request->Item=='bike') {
          $id=$request->id;
         $post=Bikeform::find($id);
         if(empty($post))
          return view('renewal');

      }
      if ($request->Item=='mobile') {
          $id=$request->id;
         $post=Mobileform::find($id);
         if(empty($post))
          return view('renewal');
      }
      if ($request->Item=='laptop') {
          $id=$request->id;
         $post=Laptopform::find($id);
         if(empty($post))
          return view('renewal');

      }
     return view('renewalpolicy')->withPost($post);
      }
      public function Renewal(Request $request){

           $id=$request->id;
           if($id>10000&&$id<20000){
              $post=Carform::find($id);
             return view('renewal_car')->withPost($post);
           }
           if($id>20000&&$id<30000){
              $post=Bikeform::find($id);
             return view('renewal_bike')->withPost($post);
           }
           if($id>30000&&$id<40000){
              $post=Mobileform::find($id);
             return view('renewal_mobile')->withPost($post);
           }
           if($id>40000&&$id<50000){
              $post=Laptopform::find($id);
             return view('renewal_laptop')->withPost($post);
           }
        }

}
