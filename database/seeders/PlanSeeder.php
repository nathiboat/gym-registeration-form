<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PlanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $plans = [
            ['title' => 'Day pass', 'slug' => 'canary-wharf-day', 'stripe_product_id' => 'prod_IpiALj4JshSvKK', 'stripe_id' => 'price_1IE2jqFvxnKmnYt8Zw1Y5ZVT'],
            ['title' => 'Monthly', 'slug' => 'canary-wharf-monthly', 'stripe_product_id' => 'prod_IpiALj4JshSvKK', 'stripe_id' => 'price_1IE2jqFvxnKmnYt8NiZvCzwd'],
            ['title' => 'Quarterly', 'slug' => 'canary-wharf-quarterly', 'stripe_product_id' => 'prod_IpiALj4JshSvKK', 'stripe_id' => 'price_1IE2jqFvxnKmnYt8wTLzdLko'],
            ['title' => 'Annual pass', 'slug' => 'canary-wharf-annual', 'stripe_product_id' => 'prod_IpiALj4JshSvKK', 'stripe_id' => 'price_1IE2jqFvxnKmnYt89zjSykMG'],

            ['title' => 'Monthly', 'slug' => 'oxford-circus-monthly', 'stripe_product_id' => 'prod_IpiBvCo1Z7AghQ', 'stripe_id' => 'price_1IE2laFvxnKmnYt8j9TWD64V'],
            ['title' => 'Quarterly', 'slug' => 'oxford-circus-quarterly', 'stripe_product_id' => 'prod_IpiBvCo1Z7AghQ', 'stripe_id' => 'price_1IE2laFvxnKmnYt83lzWYs5V'],
            ['title' => 'Annual pass', 'slug' => 'oxford-circus-annual', 'stripe_product_id' => 'prod_IpiBvCo1Z7AghQ', 'stripe_id' => 'price_1IE2laFvxnKmnYt8WLupyUM6'],

            ['title' => 'Day pass', 'slug' => 'camden-town-day', 'stripe_product_id' => 'prod_IpiCtiTnyhOKbx', 'stripe_id' => 'price_1IE2mVFvxnKmnYt80afxrFy0'],
            ['title' => 'Monthly', 'slug' => 'camden-town-monthly', 'stripe_product_id' => 'prod_IpiCtiTnyhOKbx', 'stripe_id' => 'price_1IE2mVFvxnKmnYt86fww5dwd'],

            ['title' => 'Day pass', 'slug' => 'wimbledon-day', 'stripe_product_id' => 'prod_IpiEGrhy64Sjod', 'stripe_id' => 'price_1IE2nrFvxnKmnYt8v7o4FAHS'],
            ['title' => 'Monthly', 'slug' => 'wimbledon-monthly', 'stripe_product_id' => 'prod_IpiEGrhy64Sjod', 'stripe_id' => 'price_1IE2nrFvxnKmnYt8XN0mAS9t'],
            ['title' => 'Quarterly', 'slug' => 'wimbledon-quarterly', 'stripe_product_id' => 'prod_IpiEGrhy64Sjod', 'stripe_id' => 'price_1IE2nrFvxnKmnYt8cd1qPcn7'],
            ['title' => 'Annual pass', 'slug' => 'wimbledon-annual', 'stripe_product_id' => 'prod_IpiEGrhy64Sjod', 'stripe_id' => 'price_1IE2nrFvxnKmnYt8NGDkFKVF'],

            ['title' => 'Day pass', 'slug' => 'brent-cross-day', 'stripe_product_id' => 'prod_IpiGBZQUGstPrZ', 'stripe_id' => 'price_1IE2q3FvxnKmnYt8gPtETxD4'],
            ['title' => 'Monthly', 'slug' => 'brent-cross-monthly', 'stripe_product_id' => 'prod_IpiGBZQUGstPrZ', 'stripe_id' => 'price_1IE2q2FvxnKmnYt8IjyzGU1e'],
            ['title' => 'Annual pass', 'slug' => 'brent-cross-annual', 'stripe_product_id' => 'prod_IpiGBZQUGstPrZ', 'stripe_id' => 'price_1IE2q2FvxnKmnYt85daN1r5x'],
        ];

        DB::table('plans')->insert($plans);
    }
}
