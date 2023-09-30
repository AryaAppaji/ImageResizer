<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DownloadController extends Controller
{
    public function downloadFile(){
        $file = Storage::disk("public")->allFiles();
        $file = $file[1];
        $filePath = public_path("storage/".$file);
        $response = response()->download($filePath,$file);
        Storage::disk("public")->delete($file);
        return $response;
    }
}
