<?php
include "./db.php";
$searchedProducts=array();

if(isset($_GET["q"])) {
    $search = mysqli_real_escape_string($link, $_GET["q"]);
    $search_query = "SELECT * FROM products WHERE title LIKE '%" . $search . "%' OR description LIKE '%" . $search . "%' OR category LIKE '%" . $search . "%'";
    if ($search_result = mysqli_query($link, $search_query)) {
        while ($searched_product = mysqli_fetch_array($search_result)) {
            $allImages=array();
            $search_image_query = "SELECT * FROM images WHERE product_id=" . mysqli_real_escape_string($link, $searched_product["id"]) . " LIMIT 1";
            if ($search_image_result = mysqli_query($link, $search_image_query)) {
                $searched_image = mysqli_fetch_array($search_image_result);
                $searched_product["images"] = $searched_image;
            }
            array_push($searchedProducts, $searched_product);
        }
    }
}
?>


<?php
foreach ($searchedProducts as $sproduct) { ?>

    <div class='search-item'>
        <a href='product-detail.php?id=<?php echo $sproduct["id"];?>' class='search-info'>
            <div class='search-img-container'>
                <img src='./assets/furniture/<?php echo $sproduct["images"]["img"];?>' alt=''>
            </div>
            <div class='search-description'>
                <h5><?php echo $sproduct["title"];?></h5>
                <div class='price'><?php echo $sproduct["price"];?> &euro;</div>
            </div>
        </a>
    </div>

<?php } ?>
