<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\RegionController;
use App\Http\Controllers\FileUploadController;


Route::get('regions', [RegionController::class, 'index']);
Route::post('/upload', [FileUploadController::class, 'upload']);
