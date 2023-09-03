<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Taxonomy;
use App\Models\Taxons;

class TaxonController extends Controller
{
	public function addTaxon(Request $request){
		Taxons::AddTaxonToParentById($request);
	}
	
	public function getTaxon(Request $request, $id)
	{
		$tree = Taxons::getTaxonsById($id);
		return $tree;
	}
}
