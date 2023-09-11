<?php

namespace App\Services;

use App\Models\Image;

class TaxonService implements TaxonServiceInterface
{
	public function getImagesofTaxonById($id)
	{
		return Image::select('*')->where('taxon_id', '=', $id)->get();
	}
}