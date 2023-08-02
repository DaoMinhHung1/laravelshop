<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            ['name' => 'Quần Áo'],
            ['name' => 'Áo Khoác'],
            ['name' => 'Giày'],
            ['name' => 'Phụ Kiện'],
        ]);
    }
}
