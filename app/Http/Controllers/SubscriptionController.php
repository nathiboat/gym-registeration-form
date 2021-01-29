<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SubscriptionController extends Controller
{

    /**
     * Subscription index page
     *
     */
    public function index(Request $request)
    {
        return view('subscriptions.index', [
            'plan' => $request->plan
        ]);
    }

    /**
     * Show thank you page
     *
     */
    public function thankyou() {
        return view('subscriptions.thankyou');
    }
}
