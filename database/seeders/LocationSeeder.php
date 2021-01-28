<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LocationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $locations = [
            ['name' => 'Canary Wharf', 'slug' => 'canary-wharf', 'stripe_product_id' => 'prod_IpiALj4JshSvKK'],
            ['name' => 'Oxford Circus', 'slug' => 'oxford-circus', 'stripe_product_id' => 'prod_IpiBvCo1Z7AghQ'],
            ['name' => 'Camden Town', 'slug' => 'camden-town', 'stripe_product_id' => 'prod_IpiCtiTnyhOKbx'],
            ['name' => 'Wimbledon', 'slug' => 'wimbledon', 'stripe_product_id' => 'prod_IpiEGrhy64Sjod'],
            ['name' => 'Brent Cross', 'slug' => 'brent-cross', 'stripe_product_id' => 'prod_IpiGBZQUGstPrZ']
        ];
        DB::table('locations')->insert($locations);
    }
}
