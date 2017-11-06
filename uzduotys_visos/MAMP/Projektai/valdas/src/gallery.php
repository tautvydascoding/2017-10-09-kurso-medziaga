<div id="gallery">
    <div class="gallery-row">
        <div class="left-container">
            <div class="arrow-div arrow-up" onclick="changeImg('prev')">
                <i class="material-icons">keyboard_arrow_left</i>
            </div>
            <div class="left">

                <?php foreach ($product["images"] as $image) { ?>
                    <div class="small-image">
                        <img onclick="changeImg(event)" src="./assets/furniture/<?php echo $image; ?>">
                    </div>
                <?php } ?>

            </div>
            <div class="arrow-div arrow-down" onclick="changeImg('next')">
                <i class="material-icons">keyboard_arrow_right</i>
            </div>
        </div>
        <div class="right-container" onclick="showFullScreen()">
            <div class="big-image">
                <img class="main-image" src="#">
            </div>
        </div>
    </div>

    <div class="full-screen-hidden">
        <div class="full-screen">
            <div class="full-screen-arrow full-screen-arrow-left" onclick="changeImg('prev')">
                <i class="material-icons">keyboard_arrow_left</i>
            </div>
            <div class="full-screen-image" onclick="closeFullScreen()">
                <img class="main-image" src="#">
            </div>
            <div class="full-screen-arrow full-screen-arrow-right" onclick="changeImg('next')">
                <i class="material-icons">keyboard_arrow_right</i>
            </div>
        </div>
    </div>

</div>
