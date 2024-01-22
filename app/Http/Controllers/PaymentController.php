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
use App\Models\Payment;
use Auth;

class PaymentController extends Controller
{
    /**
     * Show the payment form.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request, $course)
    {
        return view('billing', compact('course'));
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

            if ($request->input('paymentCourse') === "light") {
                $amount = 500;
            } else {
                $amount = 1000;
            }

            // Create a charge
            $charge = Charge::create([
                "amount" => $amount,
                "currency" => "jpy",
                "source" => $request->stripeToken,
                "description" => "Test payment from Grabslot.co.jp"
            ]);

            // Register user payment info
            $payment = new Payment;
            $payment->user_id = Auth::user()->id;
            $payment->course = $request->input('paymentCourse');
            $payment->transaction_id = $charge->id;
            $payment->save();           
            
            // Flash success message
            Session::flash('success', $charge->id);

            // Redirect to the success route
            return redirect()->route('payment.success');

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
