<?php

namespace App\Http\Controllers;

use Illuminate\Http\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;
use Psy\VersionUpdater\Downloader;

class UploadController extends Controller
{
    public function upload(Request $request){
        session()->start();
        $request->validate([
            "upload" => ["required","mimes:jpg,jpeg,png,avif,gif,webp"],
            "width" => ["required"],
            "height" => ["required"],
        ],
        [
            "upload.required" => "Please select a file.",
            "upload.mimes" => "The uploaded must be either jpg,jpeg,png,avif,gif,webp types",
            "width" => "Please enter width.",
            "height" => "Please enter height.",
        ]);

        $file = $request->file("upload");
        $filename = $file->getClientOriginalName();
        $file->storeAs("public",$filename);

        $width = (int) $request->input("width");
        $height = (int) $request->input("height");

        $img = Image::make($file)->resize($width, $height);

        $newName = pathinfo($filename,PATHINFO_FILENAME)."_{$width}x{$height}."."png";
        Storage::disk("public")->put($newName,$img->encode("png"));
        Storage::disk("public")->delete($filename);
        return redirect()->route("dn");
    }
}
