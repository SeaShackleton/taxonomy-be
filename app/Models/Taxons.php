<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Kalnoy\Nestedset\NodeTrait;

class Taxons extends Model
{
	use NodeTrait;
	
	public $timestamps = false;
	protected $table = 'taxons';
	
	/**
	 *	getTaxonsById
	 *	Accepts a taxon id
	 *	Returns a Nested Tree
	 */
	public static function getTaxonsById($id) 
	{
		return Taxons::descendantsAndSelf($id)->toTree();			
	}
	
	/**
	 *	AddTaxonToParentById
	 *	Accepts:
	 *		Request
	 *			$request->authority
	 *			$request->name
	 *			$request->suptaxon_id
	 *			$request->taxonomic_unit_id
	 *			$request->parent_id
	 *
	 */
	public static function AddTaxonToParentById($request) 
	{
		//create new taxon
		$taxon = new Taxons();
		$taxon->authority = $request->authority;
		$taxon->name = $request->name;
		$taxon->suptaxon_id = $request->suptaxon_id;
		$taxon->taxonomic_unit_id = $request->taxonomic_unit_id;
		
		//$taxon->saveAsRoot();
		//find parent
		$parentTaxon = Taxons::find($request->parent_id);
		
		//associate taxon to parent and save
		$taxon->appendToNode($parentTaxon)->save();	
	}
}
