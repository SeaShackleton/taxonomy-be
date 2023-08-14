<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Taxonomy extends Model
{
	public $timestamps = false;
	protected $table = 'taxonomy';
	
	public function taxons(): HasMany
	{
		return $this->hasMany(Taxons::class, 'taxonomic_unit_id', 'id');
	}
}