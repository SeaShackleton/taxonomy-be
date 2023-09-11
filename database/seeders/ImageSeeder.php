<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
		DB::table('images')->insert([
            'file_name' => 'file-1.jpg',
			'taxon_id' => 1
        ]);
		DB::table('images')->insert([
            'file_name' => 'file-2.jpg',
			'taxon_id' => 1
        ]);
		DB::table('images')->insert([
            'file_name' => 'file-3.jpg',
			'taxon_id' => 1
        ]);
		DB::table('images')->insert([
            'file_name' => 'file-4.jpg',
			'taxon_id' => 1
        ]);
		DB::table('images')->insert([
            'file_name' => 'file-5.jpg',
			'taxon_id' => 1
        ]);
		DB::table('images')->insert([
            'file_name' => 'file-6.jpg',
			'taxon_id' => 1
        ]);
		DB::table('images')->insert([
            'file_name' => 'file-7.jpg',
			'taxon_id' => 1
        ]);
    }
}
