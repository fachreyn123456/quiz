<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;
use Illuminate\Support\Str;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $timestamp = \Carbon\Carbon::now()->toDateTimeString();
        DB::table('products')->insert([
            'name_product' => 'celana',
            'quantity' => 1,
            'price' => 30000,
            'created_at' => $timestamp,
            'updated_at' => $timestamp
        ]);
    }
}
