<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Taxonomy;

class TaxonomyController extends Controller
{
    //
	
	public function getTaxonomy(Request $request, $id){
		$taxonomy = Taxonomy::find($id);
		$taxons = $taxonomy->taxons;
		//return $taxonomy;
		
		return '{
			"name": "Life",
			"id": 1,
			"taxons": [
				{
					 "name": "Eucarya",
					 "id": 2,
					 "taxons": [
						{
							"name": "Animalia", 
							"id": 3,
							"value": 51532,
							"taxons": [
								{
									"name": "Chordata",
									"id": 4,
									"value": 42653,
									"taxons": [
										{
											"name": "Mammalia",
											"id": 5,
											"value": 32556,
											"taxons": [
												{
													"name": "Carnivora",
													"id": 6,
													"value": 12365,
													"taxons": [
														{
															"name": "Canidae",
															"id": 7,
															"value": 2236,
															"taxons": [
																{
																	"name": "Canis",
																	"id": 8,
																	"value": 423,
																	"taxons": [
																		{
																			"name": "Lupus",
																			"id": 9,
																			"value": 1
																		}
																	]
																}
															]
														}
													]
												}
											]
										}
									]
								}
							]
						}
					 ]
				},
				{
				  "name": "Archaea",
				  "id": 10
				},   
				{
				  "name": "Bacteria",
				  "id": 11,
				  "taxons": [
					{ "name": "Accounts payable", "id": 12, "value": 53010 },
					{ "name": "Accrued salaries", "id": 13, "value": 23554 },
					{ "name": "Unearned revenue", "id": 14, "value": 253322 },
					{ "name": "Commercial paper", "id": 15, "value": 326008 },
					{ "name": "Current portion of long-term debt", "id": 16, "value": 112431 },
					{ "name": "Funds held for others", "id": 17, "value": 2500 },
					{ "name": "Other current liabilities", "id": 18, "value": 71036 }
				  ]	  
				}
			]
		}';
	}
	public function addTaxonomy(Request $request){
		//$request->
		$taxonomy = new Taxonomy();
		$taxonomy->name = $request->name;
		$taxonomy->parent_id = $request->parent_id;
		
		$taxonomy->save();
	}
}
