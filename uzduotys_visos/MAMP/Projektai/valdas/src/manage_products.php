<?php include "./header.php" ?>
<?php include "./db.php" ?>

<?php

$products_query = "SELECT * FROM products";
$allProducts=array();
if ($product_result = mysqli_query($link, $products_query)) {
    while ($product = mysqli_fetch_array($product_result)) {
        $image_query = "SELECT * FROM images WHERE product_id=" . mysqli_real_escape_string($link, $product["id"]);
        $allImages=array();
        if ($image_result = mysqli_query($link, $image_query)) {
            while ($image = mysqli_fetch_array($image_result)) {
                array_push($allImages, $image["img"]);
            };
            $product["images"] = $allImages;
        }
        array_push($allProducts, $product);
    };
}

if (isset($_COOKIE['customer'])) { ?>

<section class="manage-products">
    <div class="manage-products-container">
        <h3>Manage products</h3>
        <div class="manage-products-block">
            <div class="manage-item-block">
                <div class="manage-item manage-item-img w15 bold">
                    Main image
                </div>
                <div class="manage-item manage-item-title w15 bold">
                    Title
                </div>
                <div class="manage-item manage-item-category w15 bold">
                    Category
                </div>
                <div class="manage-item manage-item-description w25 small-hidden  bold">
                    Description
                </div>
                <div class="manage-item manage-item-important w5 small-hidden bold">
                    X
                </div>
                <div class="manage-item manage-item-price w7-5 small-hidden bold">
                    Price
                </div>
                <div class="manage-item manage-item-old-price w7-5 small-hidden bold">
                    Old price
                </div>
                <div class="manage-item manage-item-edit w5 bold">
                    Edit
                </div>
                <div class="manage-item manage-item-delete w5 bold">
                    Del
                </div>
            </div>

            <?php foreach ($allProducts as $product) { ?>
            <div class="manage-item-block">
                    <div class="manage-item manage-item-img w15">
                        <a class="link-to-product" href="product-detail.php?id=<?php echo $product["id"];?>">
                            <img src="./assets/furniture/<?php echo $product["images"][0];?>" alt="<?php echo $product["title"];?>">
                        </a>
                    </div>
                    <div class="manage-item manage-item-title w15">
                        <p>
                            <?php echo $product["title"];  ?>
                        </p>
                    </div>
                    <div class="manage-item manage-item-category w15">
                        <p>
                            <?php echo ucfirst(str_replace('_', ' ', $product["category"]));  ?>
                        </p>
                    </div>
                    <div class="manage-item manage-item-description w25 small-hidden ">
                        <p>
                            <?php echo $product["description"];  ?>
                        </p>
                    </div>
                    <div class="manage-item manage-item-important w5 small-hidden">
                        <p>
                            <?php echo $product["important"];  ?>
                        </p>
                    </div>
                    <div class="manage-item manage-item-price w7-5 small-hidden">
                        <p>
                            <?php echo $product["price"];?>&euro;
                        </p>
                    </div>
                    <div class="manage-item manage-item-old-price w7-5 small-hidden">
                        <p>
                            <?php if ($product["price_old"]) {echo $product["price_old"]."&euro;";}?>
                        </p>
                    </div>
                <a href="edit_product.php?id=<?php echo $product['id'];?>" class="manage-item manage-item-edit w5">
                    <i class="material-icons">mode_edit</i>
                </a>
                <a href="#" data-id="<?php echo $product["id"]; ?>" class="manage-item manage-item-delete w5">
                    <i class="material-icons">delete_forever</i>
                </a>
            </div>

            <?php if(isset($product["id"]) && isset($_COOKIE['customer'])) { ?>
                <div class="confirm-delete hidden-confirm " id="modalid<?php echo $product["id"]; ?>">
                    <div class="confirm-delete-block">
                        <div class="confirm-delete-div">
                            <h4>Are you sure you want to delete <?php echo $product["title"]; ?></h4>
                            <a class="admin-button-edit" href="#">Cancel</a>
                            <a class="admin-button-delete" href="./delete_product.php?id=<?php echo $product["id"]; ?>">Delete</a>
                        </div>
                    </div>
                </div>
            <?php } ?>
            <?php } ?>

        </div>
    </div>

</section>
<?php } ?>

<?php include "./footer.php" ?>
