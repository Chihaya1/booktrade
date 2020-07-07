<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Cart;
use App\Order;

class CheckoutController extends Controller
{
    //
    public function shipping()
    {
       
        return view('cart.checkout');
    }

    public function payment()
    {
        return view('cart.payment');
    }
    public function paymentstore(Request $request)
    {
      // Set your secret key: remember to change this to your live secret key in production
    // See your keys here: https://dashboard.stripe.com/account/apikeys
    \Stripe\Stripe::setApiKey("sk_test_M8hfDnQwXx36Lm8qJ2zWjVDP");

    // Get the credit card details submitted by the form
            $token = $request->stripeToken;
    
    // Create a charge: this will charge the user's card
            try {
                $charge = \Stripe\Charge::create(array(
                    "amount" => Cart::total()*100, // Amount in cents
                    "currency" => "usd",
                    // "source" => $token,
                    "source" => 'tok_visa',
                    "description" => "Example charge"
                ));
            } catch (\Stripe\Error\Card $e) {
                // The card has been declined
            }
          //Create the order
         Order::createOrder();
    
            //redirect user to some page
            // return "Order completed";
            return redirect('/home');
    
        }
    

}

    

