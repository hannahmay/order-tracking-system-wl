<?php

use Illuminate\Database\Seeder;

class SupplierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('suppliers')->insert([
            'name' => 'Gantsilyo Guru',
            'location' => 'Kapasigan, Pasig City',
            'type' => 'O',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('suppliers')->insert([
            'name' => "Ashley's Crochet",
            'location' => 'Baguio City',
            'type' => 'O',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('suppliers')->insert([
            'name' => "Carolina's",
            'location' => 'Market! Market!',
            'type' => 'P',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);
    }
}
