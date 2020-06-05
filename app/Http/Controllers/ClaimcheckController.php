<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Carform;
use App\Bikeform;
use App\Mobileform;
use App\Laptopform;
use Illuminate\Support\Facades\DB;

class ClaimcheckController extends Controller
{
  public function check(Request $request){

    if ($request->Item=='car') {
        $id=$request->id;
        $post=Carform::find($id);
        if(empty($post))
         return view('claim_check');
        $aa=$post->aadharno;
        $aa1=Auth::user()->aadharno;
        if($aa==$aa1)
          return view('claim');



    }
    if ($request->Item=='bike') {
      $id=$request->id;
        $post=Bikeform::find($id);
        if(empty($post))
         return view('claim_check');
      $aa=$post->aadharno;
      $aa1=Auth::user()->aadharno;
      if($aa==$aa1)
        return view('claim');



    }
    if ($request->Item=='mobile') {
      $id=$request->id;
      $post=Mobileform::find($id);
      if(empty($post))
       return view('claim_check');
      $aa=$post->aadharno;
      $aa1=Auth::user()->aadharno;
      if($aa==$aa1)
        return view('claim');
    }
    if ($request->Item=='laptop') {
      $id=$request->id;
        $post=Laptopform::find($id);
        if(empty($post))
         return view('claim_check');

      $aa=$post->aadharno;
      $aa1=Auth::user()->aadharno;
      if($aa==$aa1)
        return view('claim');

    }

    }
}
