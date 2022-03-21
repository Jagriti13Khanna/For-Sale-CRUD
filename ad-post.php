<?php

include ("image_function.php");
include ("includes/connect.php");
$thumb_folder = "thumbnails/";
$display_folder = "display/";
$original_folder = "uploaded_files/";

if(isset($_POST['ad-btn']))
{
    $post_title = trim($_POST['title']);    
    $post_ad = trim($_POST['ad']);    
    $post_price = trim($_POST['price']);

    $image_name = $_FILES["myfile"]["name"];
    $type = strtolower(pathinfo($image_name, PATHINFO_EXTENSION));
    // $type = $_FILES["myfile"]["type"];
    $tmp_name = $_FILES["myfile"]["tmp_name"];
    $error = $_FILES["myfile"]["error"];
    $size = $_FILES["myfile"]["size"];

    //Unique Image Name
    $image_name = "image_" . uniqid() . ".$type";

    // echo "<pre>";
    // var_dump($_FILES);
    // echo "</pre>";

    $valid  = true;

    //Title
    $post_title= filter_var($post_title, FILTER_SANITIZE_STRING);
    if ($post_title == "" || !$post_title)
    {
        $invalidPT = "<p class='valError'>*Sale title cannot be empty and cannot contain html characters.*";
        $valid  = false;
    }

    //Ad Description
    $post_ad= filter_var($post_ad, FILTER_SANITIZE_STRING);
    if ($post_ad == "" || !$post_ad)
    {
        $invalidPA = "<p class='valError'>*Sale ad description cannot be empty and cannot contain html characters.*";
        $valid  = false;
    }
    else
    {
        if ((strlen($post_ad) < 20))
        {
            $invalidPA = "<p class='valError'>*Description too short. Please add more!*</p>";
            $valid  = false;
        }
    }

    //Price
    // $post_price = filter_var($post_price , FILTER_VALIDATE_FLOAT);
    if ($post_price == "")
    {
        $invalidPR = "<p class='valError'>*Price cannot be empty. Please add a price!*</p>"; 
    }
    else
    {   
        $post_price = filter_var($post_price , FILTER_VALIDATE_FLOAT);

        if(!is_numeric($post_price))
        {
            $invalidPR = "<p class='valError'>Price must be a number. Please add the price again!</p>";
        }
    }

    //Image
    if ($image_name == "")
    {
        $invalidIN = "<p class='valError'>*Please select a file.*</p>";
        $valid  = false;
    }

    if ($size > 1000000)
    {
        $invalidIN = "<p class='valError'>*Uploaded file is too large. Max limit is 1mb. Try again!*</p>";
        $valid  = false;
    }

    if ($error > 0)
    {
        $invalidIN = "<p class='valError'>*There was an error with file type $error that occurred.*</p>";
        $valid  = false;
    }

    $allowed_file_types = array("jpeg", "pjpeg", "jpg", "png", "webp");
    
    if (!in_array($type, $allowed_file_types))
    {
        $invalidIN = "<p class='valError'>*Wrong file type. Only, webp, png and jpeg file types are allowed. Try again!*</p>";
        $valid  = false;
    }

    if ($valid == true)
    {
        $upload_file = $original_folder . $image_name;
        
        if (move_uploaded_file($tmp_name, $upload_file))
        {
            
            // if ($type == "jpeg" || $type == "jpeg" || $type == "pjpeg")
            
                resize_image($upload_file, $thumb_folder, 175);
                resize_image($upload_file, $display_folder, 700);
           

            // if ($type == "png")
            // {
            //     resize_imagePNG($upload_file, $thumb_folder, 175);
            //     resize_imagePNG($upload_file, $display_folder, 700);
            // }

            // if ($type == "webp")
            // {
            //     resize_imageWEBP($upload_file, $thumb_folder, 175);
            //     resize_imageWEBP($upload_file, $display_folder, 700);
            // }
            

            if ($id)
            {
                $sql = "UPDATE for_sale SET title = '$post_title', ad = '$post_ad', image_name = '$image_name', price = '$post_price' WHERE ad_id = $id";
                // echo $sql;
            }
            else
            {
                $user_id = $_SESSION['user_id'];
                $sql = "INSERT into for_sale (title, ad, image_name, price, u_id) VALUES ('$post_title', '$post_ad', '$image_name', '$post_price', '$user_id')";
                // echo $sql;
            }
            if ($conn->query($sql))
            {
               $message .= "<p>Ad has been updated!</p>";
               $post_ad = $post_title = $post_price = "";
            }
            else
            {
                $message .= "<p>Problem. $conn->error</p>";
            }

            $invalidIN = "<p class='valNoError'>*Image Uploaded successfully.*</p>";
        }
        else
        {
            $invalidIN = "<p class='valError'>*There was a problem uploading the file.*</p>";
        }
     } 
}

?>