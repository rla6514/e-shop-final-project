<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Cartalyst\Stripe\Stripe;
use Illuminate\Support\Facades\Auth;
// use Omnipay\Omnipay;
// use App\Beer;
use App\Payment;


class PaymentController extends Controller
{

    public function store(Request $request){
        //dd($request);
        $stripe = Stripe::make('sk_test_51H2ezHBruCHLHVD7FfXUMom8aB8YxJMQ24q7HtPNyytQIsnVnY9FF1Mzaqt6obPWJZM0NlF0dGO4Gsevd5UzmtX7009JWVAa8r', '2020-03-02'); // used Stripe secret key, not Publishable key
 
        $charge = $stripe->charges()->create([
            'amount'   => $request->total,
            'currency' => 'EUR',
            'source' => $request->stripeToken,
            'receipt_email' => "admin@email.com",
        ]);

        // dd($charge);

       
            // payment was successful: insert transaction data into the database
            // $arr_payment_data = $charge->getData();
             
            // $isPaymentExist = Payment::where('payment_id', $arr_payment_data['id'])->first();
      
            //return "Payment is successful. Your payment id is: ". $arr_payment_data['id'];
    
            $payment = new Payment;
            $payment->payment_id = Auth::user()->id;
            $payment->payer_email = Auth::user()->email;
            $payment->amount = $request->total;
            $payment->currency = 'EUR';
            $payment->payment_status = "paid";
            $payment->save();

        
        
       

        $request->session('cart')->forget('cart');

        // return "Payment Created";

        return redirect('/')->with('success', 'Yuor products are on the way!!');

        // return response([
        //     'success_url'=> redirect()->intended('/')->getTargetUrl(),
        //     'message'=>'success'
        // ]);
    }  
    
 

    public function confirm(Request $request)
    {   
        //dd($request);
        
        return view('payments.payment', compact('request'));
    }


}