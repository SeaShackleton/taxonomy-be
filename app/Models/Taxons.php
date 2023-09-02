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
	
	public function taxonomy()
	{
		return $this->belongsTo(Taxonomy::class);
	}
}
