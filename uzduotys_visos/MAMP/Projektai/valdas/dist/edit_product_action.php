<?php
include "./db.php";

// FILE UPLOAD
if(isset($_COOKIE['customer'])) {

     $images = array();
     $target_dir = "./assets/furniture/";

    if(strlen($_FILES["files"]["name"][0])>3) {

        for ($i=0; $i<count($_FILES["files"]["name"]); $i++) {

             $image_name = time(). basename($_FILES["files"]["name"][$i]);
             $images[] = $image_name;
             $target_file = $target_dir . $image_name;
             $uploadOk = 1;
             $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);

             if(isset($_POST["submit"])) {
                 $check = getimagesize($_FILES["files"]["tmp_name"][$i]);
                 if($check !== false) {
                     echo "File is an image - " . $check["mime"] . ".";
                     $uploadOk = 1;
                 } else {
                     echo "File is not an image.";
                     $uploadOk = 0;
                 }
             }

             if ($_FILES["files"]["size"][$i] > 500000) {
                 echo "Sorry, your file is too large.";
                 $uploadOk = 0;
             }

             if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
             && $imageFileType != "gif" ) {
                 echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
                 $uploadOk = 0;
             }

             if ($uploadOk == 0) {
                 echo "Sorry, your file was not uploaded.";

             } else {
                 if (move_uploaded_file($_FILES["files"]["tmp_name"][$i], $target_file)) {
                 } else {
                     echo "Sorry, there was an error uploading your file.";
                 }
             }
        }
    }


    // DATABASE INSERT

    if (isset($_POST['title'])) {
        $title = mysqli_real_escape_string($link, $_POST['title']);
        $category = mysqli_real_escape_string($link, $_POST['category']);
        $description = mysqli_real_escape_string($link, $_POST['description']);
        $important = mysqli_real_escape_string($link, $_POST['important']);
        $price = mysqli_real_escape_string($link, $_POST['price']);
        $id=mysqli_real_escape_string($link, $_POST['id']);
        if (isset($_POST['modified'])) {
            $modified = 1;
        } else {
            $modified = 0;
        }

        if (isset($_POST['price_old'])) {
            if ($_POST['price_old']==0 || $_POST['price_old'] <= $price) {
                $price_old = 'NULL';
            } else {
                $price_old = $_POST['price_old'];
            }
        }

        $query = "UPDATE products SET title='$title', category='$category', description='$description', important='$important', price='$price', price_old=$price_old WHERE id='$id'";
        mysqli_query($link, $query);

        if($modified) {
            $query = "UPDATE products SET date_modified=CURRENT_TIMESTAMP() WHERE id='$id'" ;
            mysqli_query($link, $query);
        }

        if(count($images)>0) {
            foreach ($images as $image) {
                $image_query = "INSERT INTO images VALUES ('', '$image', '$id')";
                mysqli_query($link, $image_query);
            }
        }
    }
}

header("Location: manage_products.php");
