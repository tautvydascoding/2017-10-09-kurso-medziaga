<?php include "./header.php"?>
<?php include "./db.php"?>

<?php

if(isset($_GET["category"])) {
    $category_set = $_GET["category"];
}

if(isset($_GET["category"])) {
    $total_query = "SELECT SUM(important) FROM products WHERE category='".mysqli_real_escape_string($link, $category_set)."'";
} else {
    $total_query = "SELECT SUM(important) FROM products";
}
$total_result = mysqli_query($link, $total_query);
$total = mysqli_fetch_array($total_result)[0];

if(isset($_GET["q"])) {
    if (intval($_GET["q"])>0) {
        $number = intval($_GET["q"])+16;
    } else {
        $number = 8;
    }
} else {
    $number = 8;
}


if(isset($_GET["category"])) {
    $products_query = "SELECT * FROM products WHERE category='".mysqli_real_escape_string($link, $category_set)."' ORDER BY date_modified DESC";
} else {
    $products_query = "SELECT * FROM products ORDER BY date_modified DESC";
}

$allProducts=array();
$count=0;
if ($product_result = mysqli_query($link, $products_query)) {
    while ($count < $number && $product = mysqli_fetch_array($product_result)) {
        $allImages=array();
        $image_query = "SELECT * FROM images WHERE product_id=" . mysqli_real_escape_string($link, $product["id"]);
        if ($image_result = mysqli_query($link, $image_query)) {
            while ($image = mysqli_fetch_array($image_result)) {
                array_push($allImages, $image["img"]);
            };
            $product["images"] = $allImages;
        }
        $important = intval($product["important"]);
        if ($count + $important > $number) {
            continue;
        } else {
            $count+=$important;
            array_push($allProducts, $product);
        }

    };
}



?>
<section class="products-page">
    <div class="products-page-container">
        <div class="products-listing">

                <div class="products-title">
                    <h3>products</h3>
                    <?php if (isset($category_set)) {?>
                    <div class="product-type-logo">
                        <a class="categories-item" href="./products.php?category=<?php echo $category_set; ?>">
                            <div class="categories-item-text">
                                <?php echo str_replace('_', ' ', $category_set); ?>
                            </div>
                            <div class="category-logo-hidden categories-logo">
                                <?php if (file_exists("./assets/svg-icons/" . $category_set . ".svg")) {include "./assets/svg-icons/" . $category_set . ".svg";} ?>
                            </div>
                        </a>
                    </div>
                    <?php }?>
                </div>


            <?php if (count($allProducts)>0) { ?>
            <div class="products-block">

                <?php
                foreach ($allProducts as $product) { ?>

                    <div class='product-item x<?php echo $product["important"];?>'>
                        <a href='product-detail.php?id=<?php echo $product["id"];?>' class='product-info'>
                            <div class='product-img-container'>
                                <img src='./assets/furniture/<?php echo $product["images"][0];?>' alt=''>
                            </div>
                            <div class='product-description'>
                                <h5><?php echo $product["title"];?></h5>
                                <p><?php echo $product["description"];?></p>
                                <div class='price'><?php echo $product["price"];?> &euro;</div>
                            </div>
                        </a>
                    </div>

                <?php } ?>

            </div>

            <div class="products-show-more ">
                <a class="<?php  if($total<=$number) {echo "hidden";} ?>" href="products.php?q=<?php echo intval($number);?><?php if(isset($_GET["category"])) {echo "&category=$category_set";} ?>">
                Show more products
                    <hr>
                </a>
            </div>
        <?php } else { ?>
            <div class="no-products">
                <div class="">
                    <h4>Sorry, no products found</h4>
                    <a href="products.php">View all products</a>
                </div>
            </div>
        <?php } ?>
        </div>
    </div>
</section>

<?php include "./footer.php"?>
