<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
class UploadController extends Controller
{
    public function upload(Request $request){
        $request->validate([
            "upload" => ["required","mimes:jpg,jpeg,png,avif,gif,webp"],
            "width" => ["required"],
            "height" => ["required"],
        ],
        [
            "upload.required" => "Please select a file.",
            "width" => "Please enter a value.",
            "height" => "Please enter a value.",
        ]);
        $filename = $request->file("upload")->getClientOriginalName();
        $request->file("upload")->storeAs("public",$filename);
    }
}
