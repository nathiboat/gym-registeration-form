<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PlanController extends Controller
{
    public function index(Request $request)
    {
        return view('plans.index', [
            'stripe_product_id' => $request->stripe_product_id
        ]);
    }
}
