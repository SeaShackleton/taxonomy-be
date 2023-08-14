<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaxonomyController;
use App\Http\Controllers\TaxonController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('/taxonomy/{id}', [TaxonomyController::class, 'getTaxonomy']);
Route::post('/taxonomy/add', [TaxonomyController::class, 'addTaxonomy']);
Route::get('/taxons/{id}', [TaxonController::class, 'getTaxon']);
Route::post('/taxons/add', [TaxonController::class, 'addTaxon']);
