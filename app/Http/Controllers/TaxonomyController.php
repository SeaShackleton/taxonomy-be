<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Taxonomy;

class TaxonomyController extends Controller
{
    //
	
	public function getTaxonomy(Request $request, $id){
		$taxonomy = Taxonomy::getTaxonomyById($id);
		return $taxonomy;
	}
	
	public function addTaxonomy(Request $request){
		Taxonomy::addTaxonomy($request->name, $request->parent_id);
	}
}
