<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TaskStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('statuses')->insert([
            'name' => 'to do',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('statuses')->insert([
            'name' => 'in progress',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('statuses')->insert([
            'name' => 'done',
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
