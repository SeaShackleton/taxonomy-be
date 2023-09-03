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
		$tree = Taxons::descendantsAndSelf($id)->toTree();		
		return $tree[0];
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
	public static function AddTaxonToParentById($authority, $name, $suptaxonId, $taxonomicUnitId, $parentId) 
	{
		//create new taxon
		$taxon = new Taxons();
		$taxon->authority = $authority;
		$taxon->name = $name;
		$taxon->suptaxon_id = $suptaxonId;
		$taxon->taxonomic_unit_id = $taxonomicUnitId;
		
		//$taxon->saveAsRoot();
		//find parent
		$parentTaxon = Taxons::find($parentId);
		
		//associate taxon to parent and save
		$taxon->appendToNode($parentTaxon)->save();			
		
		
	}
}
