<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Register;

class RegistraionController extends Controller
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
           'Name'=>'required',
           'bday'=>'required',
           'Email_Id'=>'required',
           'Mobile_Number'=>'required',
           'Aadhar_Number'=>'required',
           'Gender'=>'required',
           'Address'=>'required',
           'City'=>'required',
           'Pin_Code'=>'required',
           'Aadhar'=>'required',
           'State'=>'required',
           'Country'=>'required',
           'uploadfile'=>'required'


        ));


      $reg=new Register;
        $reg->FullName =$request->Name;
        $reg->Bday = $request->bday;
        $reg->Email = $request->Email_Id;
        $reg->Mobile = $request->Mobile_Number;
        $reg->Gender =$request->Gender;
        $reg->Address = $request->Address;
        $reg->City = $request->City;
        $reg->Pin_Code = $request->Pin_Code;
        $reg->Aadhar = $request->Aadhar;
        $reg->State = $request->State;
        $reg->Country = $request->Country;
        $reg->uploadfile = $request->uploadfile;
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
