<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Stripe\Exception\CardException;
use Stripe\StripeClient;

class PaymentController extends Controller
{
    private $stripe;
    public function __construct()
    {
        $this->stripe = new StripeClient(config('stripe.api_keys.secret_key'));
    }

    public function index()
    {
        return view('payment');
    }

    public function payment(Request $request)
    {
        // Validate the request
        $validator = Validator::make($request->all(), [
            'fullName' => 'required',
            'cardNumber' => 'required',
            'month' => 'required',
            'year' => 'required',
            'cvv' => 'required'
        ]);

        if ($validator->fails()) {
            $request->session()->flash('danger', $validator->errors()->first());
            return response()->redirectTo('/');
        }

        // Create a Stripe token using Stripe.js
        $token = $this->createTokenWithStripeJS($request);
        if (!empty($token['error'])) {
            $request->session()->flash('danger', $token['error']);
            return response()->redirectTo('/');
        }
        
        if (empty($token['id'])) {
            $request->session()->flash('danger', 'Payment failed.');
            return response()->redirectTo('/');
        }

        // Use the token to create a charge
        $charge = $this->createCharge($token['id'], 2000);
        if (!empty($charge) && $charge['status'] == 'succeeded') {
            $request->session()->flash('success', 'Payment completed.');
        } else {
            $request->session()->flash('danger', 'Payment failed.');
        }

        return response()->redirectTo('/');
    }

    private function createTokenWithStripeJS($cardData)
    {
        try {
            $token = $this->stripe->tokens->create([
                'card' => [
                    'number' => $cardData['cardNumber'],
                    'exp_month' => $cardData['month'],
                    'exp_year' => $cardData['year'],
                    'cvc' => $cardData['cvv'],
                ],
            ]);

            return $token;
        } catch (\Exception $e) {
            return ['error' => $e->getMessage()];
        }
    }

    private function createCharge($tokenId, $amount)
    {
        try {
            $charge = $this->stripe->paymentIntents->create([
                'amount' => $amount,
                'currency' => 'usd',
                'payment_method' => $tokenId,
                'confirmation_method' => 'manual',
                'confirm' => true,
            ]);

            return $charge;
        } catch (\Exception $e) {
            return ['error' => $e->getMessage()];
        }
    }

}
