<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Luigel\Paymongo\Facades\Paymongo;

class PaymentController extends Controller
{
    /**
     * Process the Paymongo payment
     *
     * @param  \Illuminate\Http\Request  $request
     * @return void
     */
    public function processCardPayment(Request $request)
    {
        // 1. Create a payment intent using paymongo API.
        $paymentIntent = Paymongo::paymentIntent()->create([
            'amount' => $request->amount,
            'payment_method_allowed' => [
                'card'
            ],
            'payment_method_options' => [
                'card' => [
                    'request_three_d_secure' => 'automatic'
                ]
            ],
            'description' => 'Payment for ' . $request->product,
            'statement_descriptor' => 'AMC',
            'currency' => "PHP",
        ]);

        $payment_intent = $paymentIntent->getAttributes();

        // 2. Create a payment method using customers card info (cc number, expiry date, cvc/cvv) in PayMongo API.
        try {
            //code...
            $paymentMethod = Paymongo::paymentMethod()->create([
                'type' => 'card',
                'details' => [
                    'card_number' => $request->card_number,
                    'exp_month' => (int) $request->card_exp_month,
                    'exp_year' => (int) $request->card_exp_year,
                    'cvc' => $request->cvc,
                ],
                'billing' => [
                    'name' => $request->fullname,
                    'email' => $request->email,
                    'phone' => $request->phone
                ],
            ]);
        } catch (\Exception $e) {
            return back()->with('status', 'Something went wrong, kindly check your credit/debit card details.');
        }

        try {
            // 3. Attach the payment method to the payment intent to finally make to payment.
            $card_payment = $paymentIntent->attach($paymentMethod->id);

            return redirect('payment')->with('status', 'We are processing your payment...');
        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }

    /**
     * Handle Paymongo's payment received response.
     *
     * This is where you usually send email for the invoice, notifying customers, etc.
     * @param  \Illuminate\Http\Request  $request
     * @return void
     */
    public function handlePaymentReceived(Request $request)
    {
        // $status = $request->data['attributes']['data']['attributes']['status'];
        return "Payment Received";
    }

    /**
     * Handle Paymongo's payment failed response.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return void
     */
    public function handlePaymentFailed(Request $request)
    {
        return "Payment Failed";
    }
}
