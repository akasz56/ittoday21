<?php

namespace Database\Seeders;

use App\Models\Bundle;
use Illuminate\Database\Seeder;

class BundleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Bundle::create(['name' => 'Ilkommunity Data Mining', 'stock' => 25, 'price' => 38000,]);
        Bundle::create(['name' => 'Ilkommunity Game Reality', 'stock' => 25, 'price' => 38000,]);
        Bundle::create(['name' => 'Ilkommunity AgriUX', 'stock' => 25, 'price' => 38000,]);
        Bundle::create(['name' => 'Ilkommunity Dev Talks', 'stock' => 25, 'price' => 38000,]);
        Bundle::create(['name' => 'Ilkommunity Bundle', 'stock' => 25, 'price' => 75000,]);
        Bundle::create(['name' => 'Ilkommunity International Seminar Bundle', 'stock' => 15, 'price' => 95000,]);
        Bundle::create(['name' => 'UX Bundle', 'stock' => 25, 'price' => 30000,]);
    }
}
