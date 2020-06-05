<?php

namespace App\Http\Controllers;



use App\Http\Controllers\PaymentController;

use App\User;

use App\Payment;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Carform;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\DB;


class CarFormController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

     public function storetwo()
     {

       $curr  = auth()->user();



      // $pay = auth()->payment();

$pay = Payment ::select('select * from payments');


       $reg=new Carform;



         $reg->aadharno=$curr->aadharno;

         $reg->carreg = $pay->carreg;
         $reg->modelnumber = $pay->modelnumber;
         $reg->chassisnumber = $pay->chassisnumber;
         $reg->purchasingdate = $pay->purchasingdate;
         $reg->price =$pay->price;
         $reg->amounttobepaid = $pay->amounttobepaid;
         $reg->amountidv = $pay->amountidv;
         $reg->uploadbill = $pay->uploadbill;
         $reg->uploadcarphoto= $pay->uploadcarphoto;
         $reg->uploadchassisnumberphoto = $pay->uploadchassisnumberphoto;
         $reg->uploadfront = $pay->uploadfront;
         $reg->uploadback = $pay->uploadback;

        $reg->save();


     }


    public function store(Request $request)
    {
        $this->validate($request,array(


           'carreg'=>'required',
           'modelnumber'=>'required',
           'chassisnumber'=>'required',
           'purchasingdate'=>'required',
           'price'=>'required',
           'uploadbill'=>'required',
           'uploadcarphoto'=>'required',
           'uploadchassisnumberphoto'=>'required',
           'uploadfront'=>'required',
           'uploadback'=>'required'



        ));




      //  $curr = Auth::User();

      $curr  = auth()->user();


      $pay = auth()->Payment();



      $reg=new Carform;


  //   $pay = Payment ::select('select * from payments');

        $reg->ownername=$curr->name;

        $reg->aadharno=$curr->aadharno;

        $reg->mobno=$curr->mobno;

        $reg->email=$curr->email;

        $reg->carreg=$pay->carreg;
        $reg->modelnumber = $pay->modelnumber;
        $reg->chassisnumber = $pay->chassisnumber;
        $reg->purchasingdate = $pay->purchasingdate;
        $reg->price =$pay->price;
        $reg->uploadbill = $pay->uploadbill;
        $reg->uploadcarphoto= $pay->uploadcarphoto;
        $reg->uploadchassisnumberphoto = $pay->uploadchassisnumberphoto;
        $reg->uploadfront = $pay->uploadfront;
        $reg->uploadback = $pay->uploadback;

       $reg->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
