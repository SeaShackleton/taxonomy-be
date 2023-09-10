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
            'file_name' => 'file-1',
			'taxon_id' => 1
        ]);
		DB::table('images')->insert([
            'file_name' => 'file-2',
			'taxon_id' => 1
        ]);
    }
}
