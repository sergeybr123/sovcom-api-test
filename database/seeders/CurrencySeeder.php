<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CurrencySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('currencies')->insert(['currency' => 'usd', 'bay' => 73.26, 'sell' => 73.20, 'begin_at' => '2021-09-20 00:00:00']);
    }
}
