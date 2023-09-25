<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DownloadController extends Controller
{
    public function dn(){
        session()->start();
        $file = session("FileName");
        if($file){
            return response()->download(Storage::get($file))->deleteFileAfterSend(true);
        }
    }
}
