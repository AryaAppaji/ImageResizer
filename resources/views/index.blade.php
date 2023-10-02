<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="This is a hobby project designed using laravel">
    <title>Image Resizer</title>
    <link rel="shortcut icon" href="{{asset("camera lens.png")}}" type="image/x-icon">
    <link rel="stylesheet" href="{{asset('style.css')}}">
</head>
<body>

    <h1>Image Resizer</h1>
    <img class = "img1" src="{{asset('camera-photo-lens-stock-images.jpg')}}" alt="">
    <img class = "img2" src="{{asset('camera-photo-lens-stock-images.jpg')}}" alt="">
    <p>Upload an Image to resize</p>

    <form action="{{route("uploadfile")}}" method="post" enctype="multipart/form-data">
        @csrf
            <input type="file" name="upload" id=""><br>
            @error("upload")
                <span class="error1">{{$message}}</span>
            @enderror
            <br>



            <label for="width">Enter Width in pixels</label>
            <input type="number" name="width" id=""><p class="px">&nbsp;px</p><br>
            @error("width")
                <span class="error2">{{$message}}</span>
            @enderror
            <br>



            <label for="height">Enter Height in pixels</label>
            <input type="number" name="height" id=""><p class="px">&nbsp;px</p><br>
            @error("height")
                <span class="error3">{{$message}}</span>
            @enderror
            <br>

        <center>
                <input type="submit" value="Upload Image" title="Click here to upload the image">
        </center>
    </form>
</body>
</html>
