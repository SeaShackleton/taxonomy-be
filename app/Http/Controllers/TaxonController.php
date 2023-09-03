<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Taxonomy;
use App\Models\Taxons;

class TaxonController extends Controller
{
	
	public function addTaxon(Request $request){
		Taxons::AddTaxonToParentById($request->authority, $request->name, $request->suptaxon_id, $request->taxonomic_unit_id, $request->parent_id);
	}
	
	public function getTaxon(Request $request, $id)
	{
		$tree = Taxons::getTaxonsById($id);
		return $tree;
	}
}
