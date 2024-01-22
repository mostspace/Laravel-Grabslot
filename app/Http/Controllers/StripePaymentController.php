<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use Stripe\Charge;
use Stripe\Stripe;
use Stripe\Exception\CardException;
use Stripe\Exception\InvalidRequestException;
use Stripe\Exception\AuthenticationException;
use Stripe\Exception\ApiErrorException;

class StripePaymentController extends Controller
{
    /**
     * Show the payment form.
     *
     * @return \Illuminate\Http\Response
     */
    public function stripe()
    {
        return view('stripe');
    }

    /**
     * Handle the post request for the payment form.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function stripePost(Request $request)
    {
        try {
            // Set your Stripe API key
            Stripe::setApiKey(env('STRIPE_SECRET'));

            // Create a charge
            $charge = Charge::create([
                "amount" => 500,
                "currency" => "jpy",
                "source" => $request->stripeToken,
                "description" => "Test payment from Grabslot.co.jp"
            ]);

            // Flash success message
            Session::flash('success', $charge->id);

            // Redirect to the success route
            return redirect()->route('payment.success'); // Replace 'payment.success' with your actual success route

        } catch (CardException $e) {
            // Handle card errors
            Session::flash('error', $e->getError()->message);

        } catch (InvalidRequestException $e) {
            // Handle invalid request errors
            Session::flash('error', $e->getError()->message);

        } catch (AuthenticationException $e) {
            // Handle authentication errors
            Session::flash('error', $e->getError()->message);

        } catch (ApiErrorException $e) {
            // Handle other Stripe API errors
            Session::flash('error', $e->getError()->message);

        } catch (\Exception $e) {
            // Handle other exceptions
            Session::flash('error', 'An error occurred while processing your payment.');
        }

        // Redirect back in case of an error
        return back();
    }

    public function paymentSuccess() {
        // Retrieve the transaction ID from the session
        $transactionId = Session::get('success');

        // Pass the transaction ID to the view
        return view('payment_success', compact('transactionId'));
    }
}
