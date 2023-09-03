<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Taxonomy extends Model
{
	public $timestamps = false;
	protected $table = 'taxonomy';
	
	public static function getTaxonomyById($id)
	{
		$taxonomy = Taxonomy::find($id);
		return $taxonomy;
	}
	
	public static function addTaxonomy($name, $parentId)
	{
		$taxonomy = new Taxonomy();
		$taxonomy->name = $name;
		$taxonomy->parent_id = $parentId;
		
		$taxonomy->save();
	}
}
