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
		return $taxonomy;
	}
	public function addTaxonomy(Request $request){
		//$request->
		$taxonomy = new Taxonomy();
		$taxonomy->name = $request->name;
		$taxonomy->parent_id = $request->parent_id;
		
		$taxonomy->save();
	}
}
