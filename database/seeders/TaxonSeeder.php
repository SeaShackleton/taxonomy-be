<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TaxonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
		DB::table('taxons')->insert([
            'id' => 1,
			'authority' => null,
			'name' => "Life",
			'suptaxon_id' => null,
			'taxonomic_unit_id' => 1,
			'_lft' => 1,
			'_rgt' => 22,
			'parent_id' => null
        ]);
		
		DB::table('taxons')->insert([
            'id' => 2,
			'authority' => null,
			'name' => "Eucarya",
			'suptaxon_id' => null,
			'taxonomic_unit_id' => 2,
			'_lft' => 2,
			'_rgt' => 17,
			'parent_id' => 1
        ]);

		DB::table('taxons')->insert([
            'id' => 3,
			'authority' => null,
			'name' => "Archaea",
			'suptaxon_id' => null,
			'taxonomic_unit_id' => 2,
			'_lft' => 18,
			'_rgt' => 19,
			'parent_id' => 1
        ]);

		DB::table('taxons')->insert([
            'id' => 4,
			'authority' => null,
			'name' => "Bacteria",
			'suptaxon_id' => null,
			'taxonomic_unit_id' => 2,
			'_lft' => 20,
			'_rgt' => 21,
			'parent_id' => 1
        ]);

		DB::table('taxons')->insert([
            'id' => 5,
			'authority' => null,
			'name' => "Animalia",
			'suptaxon_id' => null,
			'taxonomic_unit_id' => 3,
			'_lft' => 3,
			'_rgt' => 16,
			'parent_id' => 2
        ]);

		DB::table('taxons')->insert([
            'id' => 6,
			'authority' => null,
			'name' => "Chordata",
			'suptaxon_id' => null,
			'taxonomic_unit_id' => 4,
			'_lft' => 4,
			'_rgt' => 15,
			'parent_id' => 5
        ]);

		DB::table('taxons')->insert([
            'id' => 7,
			'authority' => null,
			'name' => "Mammalia",
			'suptaxon_id' => null,
			'taxonomic_unit_id' => 5,
			'_lft' => 5,
			'_rgt' => 14,
			'parent_id' => 6
        ]);

		DB::table('taxons')->insert([
            'id' => 8,
			'authority' => null,
			'name' => "Carnivora",
			'suptaxon_id' => null,
			'taxonomic_unit_id' => 6,
			'_lft' => 6,
			'_rgt' => 13,
			'parent_id' => 7
        ]);

		DB::table('taxons')->insert([
            'id' => 9,
			'authority' => null,
			'name' => "Canidae",
			'suptaxon_id' => null,
			'taxonomic_unit_id' => 7,
			'_lft' => 7,
			'_rgt' => 12,
			'parent_id' => 8,
        ]);	

		DB::table('taxons')->insert([
            'id' => 10,
			'authority' => null,
			'name' => "Canis",
			'suptaxon_id' => null,
			'taxonomic_unit_id' => 8,
			'_lft' => 8,
			'_rgt' => 11,
			'parent_id' => 9
        ]);

		DB::table('taxons')->insert([
            'id' => 11,
			'authority' => null,
			'name' => "Lupis",
			'suptaxon_id' => null,
			'taxonomic_unit_id' => 9,
			'_lft' => 9,
			'_rgt' => 10,
			'parent_id' => 10
        ]);		
    }
}
