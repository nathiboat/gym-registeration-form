<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Plan;
use Illuminate\Http\Request;

class PlanController extends Controller
{
    /**
     * @param Request $request
     * @return mixed
     */
    public function index(Request $request)
    {
        $plans = Plan::where('stripe_product_id', $request->stripe_product_id)->get();

        return $plans;
    }


    public function show($slug)
    {
        $plan = Plan::where('slug', $slug)->get();

        return $plan;
    }
}
