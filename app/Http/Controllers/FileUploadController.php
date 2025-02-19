<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FileUploadController extends Controller
{
    public function upload(Request $request)
    {
        $request->validate([
            'regionId' => 'required|integer',
            'fileType' => 'required|string',
            'file' => 'required|file|mimes:xlsx,xls',
        ]);

        $regionId = $request->input('regionId');
        $fileType = $request->input('fileType');
        $lang = $request->header('Accept-Language') === 'ka' ? 'ka' : 'en';
        $folder = $fileType === 'area' ? 'dziritadi informacia' : 'main information';
        $fileName = $fileType === 'area' ? 'regionis fartobi.xlsx' : 'municipalitetebis, qalaqebis da soflebis raodenoba.xlsx';

        $path = "excels/reg/{$lang}/{$regionId}/{$folder}/{$fileName}";

        Storage::put($path, file_get_contents($request->file('file')));

        return response()->json(['message' => 'File uploaded successfully'], 200);
    }
}
