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
			"taxons": [
				{
					 "name": "Eucarya",
					 "taxons": [
						{
							"name": "Animalia", 
							"value": 51532,
							"taxons": [
								{
									"name": "Chordata",
									"value": 42653,
									"taxons": [
										{
											"name": "Mammalia",
											"value": 32556,
											"taxons": [
												{
													"name": "Carnivora",
													"value": 12365,
													"taxons": [
														{
															"name": "Canidae",
															"value": 2236,
															"taxons": [
																{
																	"name": "Canis",
																	"value": 423,
																	"taxons": [
																		{
																			"name": "Lupus",
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
				  "name": "Archaea"
				},   
				{
				  "name": "Bacteria",
				  "taxons": [
					{ "name": "Accounts payable", "value": 53010 },
					{ "name": "Accrued salaries", "value": 23554 },
					{ "name": "Unearned revenue", "value": 253322 },
					{ "name": "Commercial paper", "value": 326008 },
					{ "name": "Current portion of long-term debt", "value": 112431 },
					{ "name": "Funds held for others", "value": 2500 },
					{ "name": "Other current liabilities", "value": 71036 }
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
