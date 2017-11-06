<?php
include "./db.php";

// DATABASE DELETE

if (isset($_GET['id']) && isset($_COOKIE['customer'])) {
    $id=$_GET['id'];
    echo $id;

    $query = "DELETE FROM products WHERE id='$id'";
    mysqli_query($link, $query);
    $query = "DELETE FROM images WHERE product_id='$id'";
    mysqli_query($link, $query);
}

header("Location: manage_products.php");
