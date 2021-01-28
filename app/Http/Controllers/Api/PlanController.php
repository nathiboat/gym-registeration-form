<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Plan;
use Illuminate\Http\Request;

class PlanController extends Controller
{
    public function index(Request $request)
    {
        $plan = Plan::where('stripe_product_id', $request->stripe_product_id)->get();

        return $plan;
    }
}
