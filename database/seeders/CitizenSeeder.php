<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class CitizenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $gender = ["M", "F"];
        for($i = 0; $i < 10; $i++){
            DB::table('citizens')->insert([
                'name' => Str::random(10),
                'gender' => $gender[$i % 2],
                'address' => Str::random(20),
                'phone' => rand(10, 12),
                'ward_id' => rand(0, 2)
            ]);
        }
    }
}
