<?php include "./header.php"?>
<?php include "./db.php"?>

<?php

if(isset($_GET["id"])) {
    $products_query = "SELECT * FROM products WHERE id='".mysqli_real_escape_string($link, $_GET["id"])."'";

    if ($product_result = mysqli_query($link, $products_query)) {
        $product = mysqli_fetch_array($product_result);

        $allImages=array();
        $image_query = "SELECT * FROM images WHERE product_id=" . mysqli_real_escape_string($link, $_GET["id"]);
        if ($image_result = mysqli_query($link, $image_query)) {
            while ($image = mysqli_fetch_array($image_result)) {
                array_push($allImages, $image["img"]);
            }
            $product["images"] = $allImages;
        }
    }

    $similar_products_query = "SELECT * FROM products WHERE category='".mysqli_real_escape_string($link, $product["category"])."' AND NOT id=" .mysqli_real_escape_string($link, $product["id"]). " LIMIT 3";
    $similarProducts = array();
    if ($similar_product_result = mysqli_query($link, $similar_products_query)) {
        while ($similar_product = mysqli_fetch_array($similar_product_result)) {
            $image_query = "SELECT * FROM images WHERE product_id=" . mysqli_real_escape_string($link, $similar_product["id"]) . " LIMIT 1";
            $image_result = mysqli_query($link, $image_query);
            $similar_product["image"] = mysqli_fetch_array($image_result);
            array_push($similarProducts, $similar_product);
        }
    }
}

?>


<section class="product-page">
    <div class="product-page-container">
        <div class="gallery-column">

            <?php include "./gallery.php" ?>

        </div>
        <div class="one-product-info-container">
            <div class="one-product-info">
                <div class="products-title">
                    <h3>products</h3>
                    <div class="product-type-logo">
                        <a class="categories-item" href="products.php?category=<?php echo $product["category"]; ?>">
                            <div class="categories-item-text">
                                <?php echo str_replace('_', ' ', $product["category"]); ?>
                            </div>
                            <div class="category-logo-hidden categories-logo">
                                <?php include "./assets/svg-icons/" . $product['category'] . ".svg"?>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="one-product-info-description">
                    <div class="one-product-info-description-block">
                        <h3><?php echo $product["title"]; ?> <span>&nbsp;-&nbsp;<?php echo str_replace('_', ' ', $product["category"]); ?></span></h3>
                        <p> <?php echo $product["description"]; ?></p>
                        <div class="one-product-info-cost-block">
                            <p class="cost-text">cost</p>
                            <div class="one-product-info-cost">
                                <p id="cost"><?php echo $product["price"]; ?> &euro;</p>
                                <?php
                                    if (isset($product["price_old"])) { ?>
                                    <p id="cost-old"><?php echo $product["price_old"]; ?> &euro;</p>
                                <?php } ?>
                            </div>
                        </div>
                        <?php if(isset($_COOKIE['customer'])) { ?>
                            <div class="one-product-admin-buttons">
                                <a class="admin-button-edit button-edit" href="./edit_product.php?id=<?php echo $product["id"]; ?>">Edit</a>
                                <a class="admin-button-delete button-delete" href="#">Delete</a>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>

            <div class="recomended">
                <div class="recomended-text">
                    <p>Recomended</p>
                </div>
                <div class="recomended-products">

                    <?php foreach ($similarProducts as $sproduct) { ?>

                    <div class="recomended-products-item">
                        <a href="product-detail.php?id=<?php echo $sproduct["id"] ?>" class="product-info">
                            <div class="product-img-container">
                                <img src="./assets/furniture/<?php echo $sproduct["image"]["img"] ?>" alt="<?php echo $sproduct["title"] ?>">
                            </div>
                            <div class="product-description">
                                <h5><?php echo $sproduct["title"] ?></h5>
                            </div>
                        </a>
                    </div>

                    <?php } ?>

                </div>

            </div>
        </div>
    </div>
</section>

<?php if(isset($_GET["id"]) && isset($_COOKIE['customer'])) { ?>
    <div class="confirm-delete hidden-confirm">
        <div class="confirm-delete-block">
            <div class="confirm-delete-div">
                <h4>Are you sure you want to delete <?php echo $product["title"]; ?></h4>
                <a class="admin-button-edit" href="#">Cancel</a>
                <a class="admin-button-delete" href="./delete_product.php?id=<?php echo $_GET["id"]; ?>">Delete</a>
            </div>
        </div>
    </div>
<?php } ?>

<?php include "./footer.php"?>
