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
use Carbon\Carbon;

class RenewalUpdate extends Controller
{
  public function renewalupdate(Request $request){




    $id=$request->id;
    if($id>10000&&$id<20000){
      if($request->policyplan=="One"){
          $id=$request->id;
        $users = Carform::find($id);
          $year =Carbon::createFromFormat('Y-m-d',$users->end);
          $date = date('Y-m-d', strtotime('+12 month', strtotime($year)));
      }
      if($request->policyplan=="Two"){
          $id=$request->id;
        $users = Carform::find($id);
          $year =Carbon::createFromFormat('Y-m-d',$users->end);
          $date = date('Y-m-d', strtotime('+24 month', strtotime($year)));
      }
      if($request->policyplan=="Three"){
          $id=$request->id;
        $users =Carform::find($id);
          $year =Carbon::createFromFormat('Y-m-d',$users->end);
          $date = date('Y-m-d', strtotime('+36 month', strtotime($year)));
      }

      $users->end=$date;
      $users->update();
    }
    if($id>20000&&$id<30000){
      if($request->policyplan=="One"){
          $id=$request->id;
        $users = Bikeform::find($id);
          $year =Carbon::createFromFormat('Y-m-d',$users->end);
          $date = date('Y-m-d', strtotime('+12 month', strtotime($year)));
      }
      if($request->policyplan=="Two"){
          $id=$request->id;
        $users = Bikeform::find($id);
          $year =Carbon::createFromFormat('Y-m-d',$users->end);
          $date = date('Y-m-d', strtotime('+24 month', strtotime($year)));
      }
      if($request->policyplan=="Three"){
          $id=$request->id;
        $users = Bikeform::find($id);
          $year =Carbon::createFromFormat('Y-m-d',$users->end);
          $date = date('Y-m-d', strtotime('+36 month', strtotime($year)));
      }

      $users->end=$date;
      $users->update();
    }
    if($id>30000&&$id<40000){
      if($request->policyplan=="One"){
          $id=$request->id;
        $users = Mobileform::find($id);
          $year =Carbon::createFromFormat('Y-m-d',$users->end);
          $date = date('Y-m-d', strtotime('+12 month', strtotime($year)));
      }
      if($request->policyplan=="Two"){
          $id=$request->id;
        $users = Mobileform::find($id);
          $year =Carbon::createFromFormat('Y-m-d',$users->end);
          $date = date('Y-m-d', strtotime('+24 month', strtotime($year)));
      }
      if($request->policyplan=="Three"){
          $id=$request->id;
        $users = Mobileform::find($id);
          $year =Carbon::createFromFormat('Y-m-d',$users->end);
          $date = date('Y-m-d', strtotime('+36 month', strtotime($year)));
      }

      $users->end=$date;
      $users->update();
    }
    if($id>40000&&$id<50000){
      if($request->policyplan=="One"){
          $id=$request->id;
        $users = Laptopform::find($id);
          $year =Carbon::createFromFormat('Y-m-d',$users->end);
          $date = date('Y-m-d', strtotime('+12 month', strtotime($year)));
      }
      if($request->policyplan=="Two"){
          $id=$request->id;
        $users = Laptopform::find($id);
          $year =Carbon::createFromFormat('Y-m-d',$users->end);
          $date = date('Y-m-d', strtotime('+24 month', strtotime($year)));
      }
      if($request->policyplan=="Three"){
          $id=$request->id;
        $users = Laptopform::find($id);
          $year =Carbon::createFromFormat('Y-m-d',$users->end);
          $date = date('Y-m-d', strtotime('+36 month', strtotime($year)));
      }

      $users->end=$date;
      $users->update();

    }
    return redirect('/calldone');
  }


}
