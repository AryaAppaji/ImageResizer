<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="This is a hobby project designed using laravel">
    <title>Image Resizer</title>
    <link rel="stylesheet" href="style.css">
    <script src="script.js"></script>
</head>
<body>

    <h1>Image Resizer</h1>
    <img class = "img1" src="{{asset('camera-photo-lens-stock-images.jpg')}}" alt="">
    <img class = "img2" src="{{asset('camera-photo-lens-stock-images.jpg')}}" alt="">
    <p>Upload an Image to resize</p>
    <form action="" method="post">
        <input type="file" name="upload" id=""><br><br>
        <label for="width">Enter Width in pixels</label>
        <input type="number" name="width" id=""><p>&nbsp;px</p><br><br>
        <label for="height">Enter Height in pixels</label>
        <input type="number" name="height" id=""><p>&nbsp;px</p><br><br>
        <input type="submit" value="Download Resized Image">
    </form>
</body>
</html>
