<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\DeliveryAddress;

class DeliveryAddressController extends Controller
{
    public function checkout()
    {   
        
        return view('checkout.index');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'city' => 'required|string|max:255',
            'state' => 'required|string|max:255',
            'country' => 'required|string|max:255',
            'postcode' => 'required|string|max:255',
            'telephone' => 'required|string|max:255',
        ]);

    /* dd($request->input('name')); */
        $checkout = new DeliveryAddress;

        $checkout->user_id = Auth::user()->id;
        $checkout->user_email = Auth::user()->email;
        $checkout->name = $request->input('name');
        $checkout->address = $request->input('address');
        $checkout->city = $request->input('city');
        $checkout->state = $request->input('state');
        $checkout->country = $request->input('country');
        $checkout->postcode = $request->input('postcode');
        $checkout->telephone = $request->input('telephone');

        $checkout->save();

        return redirect( action('PaymentController@checkout'));

    }
}
