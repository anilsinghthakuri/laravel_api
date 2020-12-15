<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class productsseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('Product')->insert([
            'name' => Str::random(10),
            'desc' => Str::random(20),
            'category'=> Str::random(10)
        ]);
    }
}
