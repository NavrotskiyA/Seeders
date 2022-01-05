<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LabelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('labels')->insert([
            'name' => 'bug',
            'color' => 'orange',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('labels')->insert([
            'name' => 'feature',
            'color' => 'green',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('labels')->insert([
            'name' => 'urgent',
            'color' => 'red',
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
