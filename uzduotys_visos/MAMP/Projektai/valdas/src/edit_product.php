<?php include "./header.php";
      include "./db.php";
 ?>
<?php
if(isset($_GET["id"])) {

    $product_query = "SELECT * FROM products WHERE id='".mysqli_real_escape_string($link, $_GET["id"])."'";

    if ($product_result = mysqli_query($link, $product_query)) {
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
}

$categories = array("living_room", "office", "for_kids", "kitchen", "accesories");

if (isset($_COOKIE['customer']) && isset($_GET['id'])) { ?>

<section class="add-new">
    <div class="add-new-form">
        <h3>Edit product </h3>
        <form action='edit_product_action.php' class="w100" method="post" enctype="multipart/form-data">
            <input type="hidden" name="id" value="<?php  echo $product['id']?>">
            <div class="form-group">
                <label for="title">Title*</label>
                <input class="form-input" id="your-name"  type="text" name="title" value="<?php echo $product['title']; ?>" required>
            </div>
            <div class="form-group">
                <label for="category">Category*</label>
                <select class="form-input" id="category"  type="text" name="category" required>
                    <?php foreach ($categories as $category) { ?>
                        <option value="<?php echo $category; ?>" <?php if($category == $product['category']) {echo "selected";} ?>><?php echo ucfirst(str_replace('_', ' ', $category)); ?></option>
                    <?php } ?>
                </select>
            </div>
            <div class="form-group">
                <label for="category">Importancy</label>
                <select class="form-input" id="category"  type="text" name="important" required>
                    <?php for ($i=1; $i<=4; $i++)  {?>
                        <option value="<?php echo $i; ?>" <?php if($i==$product['important']) {echo "selected";}?>><?php echo $i; ?></option>
                    <?php } ?>
                </select>
            </div>
            <div class="form-group w50">
                <label for="price">Current price*</label>
                <input class="form-input" id="price"  type="number" name="price" value="<?php echo $product['price']; ?>" required>
            </div>
            <div class="form-group w50">
                <label for="price_old">Old price</label>
                <input class="form-input" id="price_old"  type="number" value="<?php echo $product['price_old']; ?>" name="price_old" >
            </div>
            <div class="form-group w50">
                <label for="add-new-images">Add images</label>
                <input class="form-input" id="add-new-images"  type="file" name="files[]" multiple >
            </div>
            <div class="form-group w50">
                <label for="modified">Bring product to front</label>
                <input class="form-input" id="modified"  type="checkbox" name="modified">
            </div>
            <div class="form-group">
                <label for="add-new-description">Description*</label>
                <textarea class="form-input" id="add-new-description" name="description" required><?php echo $product['description']; ?></textarea>
            </div>
            <div class="form-group">
                <button type="submit" name="button">Save product</button>
            </div>
        </form>

    </div>
</section>

<?php } ?>

<?php include "./footer.php" ?>
