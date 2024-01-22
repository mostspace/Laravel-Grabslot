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
            'fullName' => 'required|string|max:255',
            'cardNumber' => 'required|numeric|digits_between:12,19',
            'month' => 'required|numeric|min:1|max:12',
            'year' => 'required|numeric|min:' . date('Y') . '|max:' . (date('Y') + 10),
            'cvv' => 'required|numeric|digits_between:3,4',
        ]);

        if ($validator->fails()) {
            return $this->handleValidationFailure($validator, $request);
        }

        // Create a Stripe token using Stripe.js
        $token = $this->createTokenWithStripeJS($request);
        dd($token);
        if (!empty($token['error'])) {
            return $this->handleStripeError($token['error'], $request);
        }

        if (empty($token['id'])) {
            return $this->handlePaymentFailure($request);
        }

        // Use the token to create a charge
        $charge = $this->createCharge($token['id'], 2000);

        if (!empty($charge) && $charge['status'] == 'succeeded') {
            return $this->handlePaymentSuccess($request);
        } else {
            return $this->handlePaymentFailure($request);
        }
    }

    private function handleValidationFailure($validator, $request)
    {
        $request->session()->flash('danger', $validator->errors()->first());
        return response()->redirectTo('/');
    }

    private function handleStripeError($error, $request)
    {
        $request->session()->flash('danger', $error);
        return response()->redirectTo('/');
    }

    private function handlePaymentFailure($request)
    {
        $request->session()->flash('danger', 'Payment failed.');
        return response()->redirectTo('/');
    }

    private function handlePaymentSuccess($request)
    {
        $request->session()->flash('success', 'Payment completed.');
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
