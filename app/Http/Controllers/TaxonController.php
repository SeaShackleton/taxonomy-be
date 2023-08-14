<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Taxonomy;
use App\Models\Taxons;

class TaxonController extends Controller
{
	public function addTaxon(Request $request){
		$taxonomy = Taxonomy::find($request->taxonomic_unit_id);
		
		
		$taxon = new Taxons();
		$taxon->authority = $request->authority;
		$taxon->name = $request->name;
		$taxon->suptaxon_id = $request->suptaxon_id;
		$taxon->taxonomic_unit_id = $request->taxonomic_unit_id;
		
		//$taxon->save();
		$taxonomy->taxons()->save($taxon);
	}
	
	public function getTaxon(Request $request, $id)
	{
		$taxons = Taxons::find($id);
		$taxonomy = $taxons->taxonomy;
		return $taxonomy;
	}
}
