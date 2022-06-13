<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            'name' => 'General'
        ]);
        DB::table('categories')->insert([
            'name' => 'Programming'
        ]);
        DB::table('categories')->insert([
            'name' => 'Design'
        ]);
        DB::table('categories')->insert([
            'name' => 'Food'
        ]);
        DB::table('categories')->insert([
            'name' => 'Movies'
        ]);

    }
}
