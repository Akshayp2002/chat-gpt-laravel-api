<?php

namespace Database\Seeders;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class DemoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //

        DB::table('demo')->insert([
            'title' => 'demoSeeder',
            'name' => 'demoSeeder',
            'age' => 'demoSeeder',
            'description' => 'demoSeeder description',
        ]);
    }
}
