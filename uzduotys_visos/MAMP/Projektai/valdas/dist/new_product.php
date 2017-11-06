<?php include "./header.php";
      include "./db.php";
 ?>
<?php if (isset($_COOKIE['customer'])) { ?>

<section class="add-new">
    <div class="add-new-form">
        <h3>Add new product </h3>
        <form action='add_product.php' class="w100" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="title">Title*</label>
                <input class="form-input" id="your-name"  type="text" name="title" value="" required>
            </div>
            <div class="form-group">
                <label for="category">Category</label>
                <select class="form-input" id="category"  type="text" name="category" required>
                    <option value="living_room">Living room</option>
                    <option value="office">Office</option>
                    <option value="for_kids">For kids</option>
                    <option value="kitchen">Kitchen</option>
                    <option value="accesories">Accesories</option>
                </select>
            </div>
            <div class="form-group">
                <label for="category">Importancy</label>
                <select class="form-input" id="category"  type="text" name="important" required>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                </select>
            </div>
            <div class="form-group w50">
                <label for="price">Current price</label>
                <input class="form-input" id="price"  type="number" name="price" required>
            </div>
            <div class="form-group w50">
                <label for="price_old">Old price</label>
                <input class="form-input" id="price_old"  type="number" name="price_old" >
            </div>
            <div class="form-group w50">
                <label for="add-new-main-images">Main image</label>
                <input class="form-input" id="add-new-main-images"  type="file" name="main-image" required>
            </div>
            <div class="form-group w50">
                <label for="add-new-images">Other images</label>
                <input class="form-input" id="add-new-images"  type="file" name="files[]" multiple >
            </div>
            <div class="form-group">
                <label for="add-new-description">Description*</label>
                <textarea class="form-input" id="add-new-description" name="description" required></textarea>
            </div>
            <div class="form-group">
                <button type="submit" name="button">Save product</button>
            </div>
        </form>

    </div>
</section>

<?php } ?>

<?php include "./footer.php" ?>
