<?php include "./header.php"?>

<?php

$cover_images = array("cover-image1.jpg", "cover-image2.jpg", "cover-image3.jpg");

?>


<section class="home-page" id="slider">

    <div class="background-text-block">
        <?php if(isset($_COOKIE['customer'])) { ?>
            <h1 id="logged-in">Hi, <?php echo ucfirst($_COOKIE["customer"]);?>, you are logged in. </h1>
        <?php } ?>
        <div class="big-background-text">
            N§EWEST
        </div>
        <div class="page-title-block">
            <h1>olios</h1>
            <h4>Created for learning porpose only</h4>
            <a id="view-more" href="products.php">VIEW MORE</a>
        </div>
    </div>
    <div class="slider" >
        <div class="slider-images-container">
            <?php foreach ($cover_images as $image) { ?>
                <img class="slider-images" src="./assets/covers/<?php echo $image;?>" alt="Cover image">
            <?php } ?>
        </div>
        <div class="slider-background">
        </div>
        <div class="slider-controls">
            <ul>
                <?php foreach ($cover_images as $key => $value) { ?>
                    <li class="slider-controls-button" data-index="<?php echo $key+1;?>"><i class="material-icons">panorama_fish_eye</i></li>
                <?php } ?>
            </ul>
        </div>
    </div>
</section>

<?php include "./footer.php"?>
