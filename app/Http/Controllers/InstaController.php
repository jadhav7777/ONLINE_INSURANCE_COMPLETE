<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class InstaController extends Controller
{

	public function checkout(){


 return view('checkout');
}
    public function createRequest(request $request){



$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, 'https://test.instamojo.com/api/1.1/payment-requests/');
curl_setopt($ch, CURLOPT_HEADER, FALSE);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
curl_setopt($ch, CURLOPT_HTTPHEADER,
            array("X-Api-Key:test_fbec206ac62bdae3b17c12ac392",
                  "X-Auth-Token:test_ce0d4ba5448eb6c5e39a7e32c0d"));
$payload = Array(
    'purpose' => $request->purpose,
    'amount' => $request->amount,
    'phone' => $request->phone,
    'buyer_name' => $request->username,
    'redirect_url' => 'http://localhost/superfinal/public/callsuccess',
    'send_email' => false,
    'webhook' => '',
    'send_sms' => false,
    'email' => $request->email,
    'allow_repeated_payments' => false
);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($payload));
$response = curl_exec($ch);
curl_close($ch);

//echo $response;
$data=json_decode($response,true);
return redirect($data['payment_request']['longurl']);



}
public function redirect(request $request)
{
 return $request->all();
}


}
