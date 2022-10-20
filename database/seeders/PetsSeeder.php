<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PetsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            'pet_code' => '1122',
            'pet_name' => 'Peter',
            'pet_breed' => 'Pug',
            'pet_color' => 'Blanco',
            'pet_age' => '7',
            'pet_status' => '1',
            'category_id' => '1'
        ];
        DB::table('pets')->insert($data);
    }
}
