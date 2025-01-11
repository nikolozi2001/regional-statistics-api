<?php

// In app/Http/Controllers/Api/RegionController.php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class RegionController extends Controller
{
    public function index()
    {
        $regions = DB::table('regions')->get();
        return response()->json($regions);
    }
}
