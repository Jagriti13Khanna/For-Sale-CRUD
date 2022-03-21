<?php
function resize_image($file, $folder, $new_width)
{
    list($width, $height) = getimagesize($file);

    $img_ratio = $width / $height;

    $new_height = $new_width / $img_ratio;

    $new_file = imagecreatetruecolor($new_width, $new_height);

    $source = imagecreatefromjpeg($file);

    imagecopyresampled($new_file, $source, 0, 0, 0, 0, $new_width, $new_height, $width, $height);

    imagejpeg($new_file, $folder.basename($file), 80);
    
    imagedestroy($new_file);
    imagedestroy($source);
}

// function resize_imagePNG($file, $folder, $new_width)
// {
//     list($width, $height) = getimagesize($file);

//     $img_ratio = $width / $height;

//     $new_height = $new_width / $img_ratio;

//     $new_file = imagecreatetruecolor($new_width, $new_height);

//     $source = imagecreatefromPNG($file);

//     imagecopyresampled($new_file, $source, 0, 0, 0, 0, $new_width, $new_height, $width, $height);

//     imagePNG($new_file, $folder.basename($file), 80);
    
//     imagedestroy($new_file);
//     imagedestroy($source);
// }

// function resize_imageWEBP($file, $folder, $new_width)
// {
//     list($width, $height) = getimagesize($file);

//     $img_ratio = $width / $height;

//     $new_height = $new_width / $img_ratio;

//     $new_file = imagecreatetruecolor($new_width, $new_height);

//     $source = imagecreatefromWEBP($file);

//     imagecopyresampled($new_file, $source, 0, 0, 0, 0, $new_width, $new_height, $width, $height);

//     imageWEBP($new_file, $folder.basename($file), 80);
    
//     imagedestroy($new_file);
//     imagedestroy($source);
// }

?>