<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Taxons extends Model
{
	public $timestamps = false;
	protected $table = 'taxons';
	
	public function taxonomy()
	{
		return $this->belongsTo(Taxonomy::class);
	}
}
