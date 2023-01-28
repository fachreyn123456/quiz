<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;
use Illuminate\Support\Str;

class OrdersSeeder extends Seeder
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
            DB::table('orders')->insert([
                'user' => 'client',
                'product' => 'baju',
                'total' => '50000',
                'status' => 'pending',
                'created_at' => $timestamp,
                'updated_at' => $timestamp
        ]);
    }
}
