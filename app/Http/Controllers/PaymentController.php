<?php

namespace App\Http\Controllers;



//use App\Http\Controllers\AuthController;

use App\User;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Payment;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\DB;


class PaymentController extends Controller
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
    public function store(Request $request)
    {
        $this->validate($request,array(


           'carreg'=>'required',
           'modelnumber'=>'required',
           'chassisnumber'=>'required',
           'purchasingdate'=>'required',
           'price'=>'required',
           'amounttobepaid' => 'required',
           'amountidv' => 'required',
           'uploadbill'=>'required',
           'uploadcarphoto'=>'required',
           'uploadchassisnumberphoto'=>'required',
           'uploadfront'=>'required',
           'uploadback'=>'required'



        ));




      //  $curr = Auth::User();

      $curr  = auth()->user();
    //  $s = date('Y/m/d');
    $s= date("Y-m-d", strtotime('tomorrow'));
        $e = date("Y-m-d", strtotime("+12 Months"));


     if ($request->policyplan == "Two") {
              $e = date("Y-m-d", strtotime("+24 Months"));
      } elseif ($request->policyplan == "Three") {
              $e = date("Y-m-d", strtotime("+36 Months"));
          }

        

      $reg=new Payment;






        $reg->aadharno=$curr->aadharno;



        $reg->carreg=$request->carreg;
        $reg->modelnumber = $request->modelnumber;
        $reg->chassisnumber = $request->chassisnumber;
        $reg->purchasingdate = $request->purchasingdate;
        $reg->price =$request->price;
       $reg->amounttobepaid =  $request->amounttobepaid;
       $reg->amountidv = $request->amountidv;
        $reg->uploadbill = $request->uploadbill;
        $reg->uploadcarphoto= $request->uploadcarphoto;
        $reg->uploadchassisnumberphoto = $request->uploadchassisnumberphoto;
        $reg->uploadfront = $request->uploadfront;
        $reg->uploadback = $request->uploadback;
        $reg->start = $s;
        $reg->end =  $e;

       $reg->save();

       return redirect('/callcheckout');

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
