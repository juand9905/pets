<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            'category_id' => '1122',
            'category_name' => 'Ave',
            'category_tamaño' => 'Pequeño'
        ];
        DB::table('categories')->insert($data);
    }
}
