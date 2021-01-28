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
            // Data for Canary wharf
            [
                'title' => 'Day pass',
                'slug' => 'canary-wharf-day',
                'stripe_product_id' => 'prod_IpiALj4JshSvKK',
                'stripe_id' => 'price_1IE2jqFvxnKmnYt8Zw1Y5ZVT',
                'price' => 12
            ],
            [
                'title' => 'Monthly',
                'slug' => 'canary-wharf-monthly',
                'stripe_product_id' => 'prod_IpiALj4JshSvKK',
                'stripe_id' => 'price_1IE2jqFvxnKmnYt8NiZvCzwd',
                'price' => 27
            ],
            [
                'title' => 'Quarterly',
                'slug' => 'canary-wharf-quarterly',
                'stripe_product_id' => 'prod_IpiALj4JshSvKK',
                'stripe_id' => 'price_1IE2jqFvxnKmnYt8wTLzdLko',
                'price' => 75
            ],
            [
                'title' => 'Annual pass',
                'slug' => 'canary-wharf-annual',
                'stripe_product_id' => 'prod_IpiALj4JshSvKK',
                'stripe_id' => 'price_1IE2jqFvxnKmnYt89zjSykMG',
                'price' => 240
            ],

            //Data for Oxford circus
            [
                'title' => 'Monthly',
                'slug' => 'oxford-circus-monthly',
                'stripe_product_id' => 'prod_IpiBvCo1Z7AghQ',
                'stripe_id' => 'price_1IE2laFvxnKmnYt8j9TWD64V',
                'price' => 20
            ],
            [
                'title' => 'Quarterly',
                'slug' => 'oxford-circus-quarterly',
                'stripe_product_id' => 'prod_IpiBvCo1Z7AghQ',
                'stripe_id' => 'price_1IE2laFvxnKmnYt83lzWYs5V',
                'price' => 55
            ],
            [
                'title' => 'Annual pass',
                'slug' => 'oxford-circus-annual',
                'stripe_product_id' => 'prod_IpiBvCo1Z7AghQ',
                'stripe_id' => 'price_1IE2laFvxnKmnYt8WLupyUM6',
                'price' => 180
            ],

            //Data for Camden town
            [
                'title' => 'Day pass',
                'slug' => 'camden-town-day',
                'stripe_product_id' => 'prod_IpiCtiTnyhOKbx',
                'stripe_id' => 'price_1IE2mVFvxnKmnYt80afxrFy0',
                'price' => 10
            ],
            [
                'title' => 'Monthly',
                'slug' => 'camden-town-monthly',
                'stripe_product_id' => 'prod_IpiCtiTnyhOKbx',
                'stripe_id' => 'price_1IE2mVFvxnKmnYt86fww5dwd',
                'price' =>  25
            ],

            //Data for Wimbledon
            [
                'title' => 'Day pass',
                'slug' => 'wimbledon-day',
                'stripe_product_id' => 'prod_IpiEGrhy64Sjod',
                'stripe_id' => 'price_1IE2nrFvxnKmnYt8v7o4FAHS',
                'price' => 10
            ],
            [
                'title' => 'Monthly',
                'slug' => 'wimbledon-monthly',
                'stripe_product_id' => 'prod_IpiEGrhy64Sjod',
                'stripe_id' => 'price_1IE2nrFvxnKmnYt8XN0mAS9t',
                'price' => 25
            ],
            [
                'title' => 'Quarterly',
                'slug' => 'wimbledon-quarterly',
                'stripe_product_id' => 'prod_IpiEGrhy64Sjod',
                'stripe_id' => 'price_1IE2nrFvxnKmnYt8cd1qPcn7',
                'price' => 60
            ],
            [
                'title' => 'Annual pass',
                'slug' => 'wimbledon-annual',
                'stripe_product_id' => 'prod_IpiEGrhy64Sjod',
                'stripe_id' => 'price_1IE2nrFvxnKmnYt8NGDkFKVF',
                'price' => 200
            ],

            //Data for Brent cross
            [
                'title' => 'Day pass',
                'slug' => 'brent-cross-day',
                'stripe_product_id' => 'prod_IpiGBZQUGstPrZ',
                'stripe_id' => 'price_1IE2q3FvxnKmnYt8gPtETxD4',
                'price' => 12
            ],
            [
                'title' => 'Monthly',
                'slug' => 'brent-cross-monthly',
                'stripe_product_id' => 'prod_IpiGBZQUGstPrZ',
                'stripe_id' => 'price_1IE2q2FvxnKmnYt8IjyzGU1e',
                'price' => 27
            ],
            [
                'title' => 'Annual pass',
                'slug' => 'brent-cross-annual',
                'stripe_product_id' => 'prod_IpiGBZQUGstPrZ',
                'stripe_id' => 'price_1IE2q2FvxnKmnYt85daN1r5x',
                'price' => 240
            ],
        ];

        DB::table('plans')->insert($plans);
    }
}
