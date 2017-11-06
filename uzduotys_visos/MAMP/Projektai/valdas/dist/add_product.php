<?php

include "./db.php";

// FILE UPLOAD

 $images = array();
 $target_dir = "./assets/furniture/";
 $image_name = time(). basename($_FILES["main-image"]["name"]);
 $images[] = $image_name;
 $target_file = $target_dir . $image_name;
 $uploadOk = 1;
 $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);

 if(isset($_POST["submit"])) {
     $check = getimagesize($_FILES["main-image"]["tmp_name"]);
     if($check !== false) {
         echo "File is an image - " . $check["mime"] . ".";
         $uploadOk = 1;
     } else {
         echo "File ". basename($_FILES["main-image"]["name"]). "is not an image.";
         $uploadOk = 0;
     }
 }

 if ($_FILES["main-image"]["size"] > 500000) {
     echo "Sorry, your file ". basename($_FILES["main-image"]["name"]). " is too large.";
     $uploadOk = 0;
 }

 if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
 && $imageFileType != "gif" ) {
     echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed. Problem with ". basename($_FILES["main-image"]["name"]). ".";
     $uploadOk = 0;
 }

 if ($uploadOk == 0) {
     echo "Sorry, your file ". basename($_FILES["main-image"]["name"]). " was not uploaded.";

 } else {
     if (move_uploaded_file($_FILES["main-image"]["tmp_name"], $target_file)) {
     } else {
         echo "Sorry, there was an error uploading your file  ". basename($_FILES["main-image"]["name"]). ".";
     }
 }

if(strlen($_FILES["files"]["name"][0])>3) {

    for ($i=0; $i<count($_FILES["files"]["name"]); $i++) {

         $image_name = time(). basename($_FILES["files"]["name"][$i]);

         $target_file = $target_dir . $image_name;
         $uploadOk = 1;
         $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);

         if(isset($_POST["submit"])) {
             $check = getimagesize($_FILES["files"]["tmp_name"][$i]);
             if($check !== false) {
                 echo "File is an image - " . $check["mime"] . ".";
                 $uploadOk = 1;
             } else {
                 echo "File " . basename($_FILES["files"]["name"][$i]) . " is not an image.";
                 $uploadOk = 0;
             }
         }

         if ($_FILES["files"]["size"][$i] > 500000) {
             echo "Sorry, your file " . basename($_FILES["files"]["name"][$i]) . " is too large.";
             $uploadOk = 0;
         }

         if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
         && $imageFileType != "gif" ) {
             echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed. Problem with " . basename($_FILES["files"]["name"][$i]) . ".";
             $uploadOk = 0;
         }

         if ($uploadOk == 0) {
             echo "Sorry, your file " . basename($_FILES["files"]["name"][$i]) . " was not uploaded.";

         } else {

             if (move_uploaded_file($_FILES["files"]["tmp_name"][$i], $target_file)) {
                 $images[] = $image_name;
             } else {
                 echo "Sorry, there was an error uploading  " . basename($_FILES["files"]["name"][$i]) . ".";
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

    if (isset($_POST['important'])) {
        $important = mysqli_real_escape_string($link, $_POST['important']);
    } else {
        $important = 1;
    }
    if (isset($_POST['price_old'])) {
        $price_old = mysqli_real_escape_string($link, $_POST['price_old']);
    } else {
        $price_old = NULL;
    }


    $query = "INSERT INTO products(title, category, description, important, price, price_old) VALUES ('$title', '$category', '$description', '$important', '$price', '$price_old') ";
    if($result = mysqli_query($link, $query)) {
        // echo "done";
    };

    $query = "SELECT * FROM products WHERE ID = ( SELECT MAX(ID) FROM products)";
    if($result = mysqli_query($link, $query)) {
        $new_product_id = mysqli_fetch_array($result)["id"];
    };

}

    if(count($images)>0) {
        foreach ($images as $image) {
            $image_query = "INSERT INTO images VALUES ('', '$image', '$new_product_id')";
            mysqli_query($link, $image_query);
        }
    }

header("Location: new_product.php");

?>
