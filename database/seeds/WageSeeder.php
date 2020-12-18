<?php

use Illuminate\Database\Seeder;

class WageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('wages')->insert([
            'name' => 'Minimum Wage',
            'wage' => '67.125',
            'comment' => 'Minimum wage in Ph is P537. So divide that by 8 hours.',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('wages')->insert([
            'name' => 'Half Minimum Wage',
            'wage' => '33.5625',
            'comment' => 'Minimum wage in Ph is P537. So divide that by 8 hours.',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('wages')->insert([
            'name' => 'Minimum Wage - 35',
            'wage' => '35',
            'comment' => 'Minimum wage in Ph is P537. So divide that by 8 hours.',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('wages')->insert([
            'name' => 'Minimum Wage - 40',
            'wage' => '35',
            'comment' => 'Minimum wage in Ph is P537. So divide that by 8 hours.',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);
    }
}
