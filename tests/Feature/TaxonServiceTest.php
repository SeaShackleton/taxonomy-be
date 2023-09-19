<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Services\TaxonService;

class TaxonServiceTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_get_images_of_taxon_by_id_(): void
    {
		$TaxServ = new TaxonService();
		$testReturn = $TaxServ->getImagesofTaxonById(1);
		$this->assertIsObject($testReturn, "Assert is object or not");
		$this->assertEquals("file-1.jpg", $testReturn[0]->file_name);
    }
}
