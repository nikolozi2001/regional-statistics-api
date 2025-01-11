<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\RegionController;

Route::get('regions', [RegionController::class, 'index']);
