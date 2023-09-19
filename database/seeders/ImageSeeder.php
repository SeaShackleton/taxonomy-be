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
		DB::table('images')->insert([
            'file_name' => 'file-8.jpg',
			'taxon_id' => 2
        ]);
		DB::table('images')->insert([
            'file_name' => 'file-9.jpg',
			'taxon_id' => 2
        ]);
		DB::table('images')->insert([
            'file_name' => 'file-10.jpg',
			'taxon_id' => 2
        ]);
		DB::table('images')->insert([
            'file_name' => 'file-11.jpg',
			'taxon_id' => 2
        ]);
		DB::table('images')->insert([
            'file_name' => 'file-12.jpg',
			'taxon_id' => 2
        ]);
		DB::table('images')->insert([
            'file_name' => 'file-13.jpg',
			'taxon_id' => 2
        ]);
		DB::table('images')->insert([
            'file_name' => 'file-14.jpg',
			'taxon_id' => 5
        ]);
		DB::table('images')->insert([
            'file_name' => 'file-15.jpg',
			'taxon_id' => 5
        ]);
		DB::table('images')->insert([
            'file_name' => 'file-16.jpg',
			'taxon_id' => 5
        ]);
		DB::table('images')->insert([
            'file_name' => 'file-17.jpg',
			'taxon_id' => 5
        ]);
		DB::table('images')->insert([
            'file_name' => 'file-18.jpg',
			'taxon_id' => 5
        ]);
		DB::table('images')->insert([
            'file_name' => 'file-19.jpg',
			'taxon_id' => 5
        ]);
		DB::table('images')->insert([
            'file_name' => 'file-20.jpg',
			'taxon_id' => 5
        ]);
		DB::table('images')->insert([
            'file_name' => 'file-21.jpg',
			'taxon_id' => 5
        ]);
		DB::table('images')->insert([
            'file_name' => 'file-22.jpg',
			'taxon_id' => 5
        ]);
    }
}
