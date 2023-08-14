<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TaxonomySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

		DB::table('taxonomy')->insert([
            'name' => 'Life',
			'parent_id' => null
        ]);
		DB::table('taxonomy')->insert([
            'name' => 'Domain',
			'parent_id' => 1
        ]);
		DB::table('taxonomy')->insert([
            'name' => 'Kingdom',
			'parent_id' => 2
        ]);
		DB::table('taxonomy')->insert([
            'name' => 'Phylum',
			'parent_id' => 3
        ]);
		DB::table('taxonomy')->insert([
            'name' => 'Class',
			'parent_id' => 4
        ]);
		DB::table('taxonomy')->insert([
            'name' => 'Order',
			'parent_id' => 5
        ]);
		DB::table('taxonomy')->insert([
            'name' => 'Family',
			'parent_id' => 6
        ]);
		DB::table('taxonomy')->insert([
            'name' => 'Genus',
			'parent_id' => 7
        ]);
		DB::table('taxonomy')->insert([
            'name' => 'Species',
			'parent_id' => 8
        ]);
    }
}
