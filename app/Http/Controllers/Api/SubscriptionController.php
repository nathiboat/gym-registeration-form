<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Plan;
use App\Models\User;
use Illuminate\Http\Request;

class SubscriptionController extends Controller
{

    public function store(Request $request)
    {
        $user = User::firstOrCreate(
            [
                'email' => $request->input('form.email')
            ],
            [
                'name' => $request->input('form.name'),
                'surname' => $request->input('form.surname'),
                'number' => $request->input('form.phone'),
                'postcode' => $request->input('form.postcode'),
                'age' => $request->input('form.age'),
                'tc' => $request->input('form.tc'),
                'newsletter' => $request->input('form.newsletter'),
            ]
        );


        $plan = Plan::where('slug', $request->input('form.plan'))
            ->first();

        $user->newSubscription('default', $plan->stripe_id)
            ->create($request->input('form.payment_method_id'));

        return back();
    }

}
