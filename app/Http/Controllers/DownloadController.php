<?php

namespace App\Http\Controllers;

class DownloadController extends Controller
{
    public function downloadFile()
    {
        session()->start();
        $file = session()->get('file');
        $filePath = public_path('storage/'.$file);
        $response = response()->download($filePath, $file);

        return $response;
    }
}
