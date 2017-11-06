<?php
require './header3.php';

$allimg = getImages();
if ($allimg !=NULL) {
    //mysqli_fetch_assoc paima straipsni ir sudeda i masyva
    $img = mysqli_fetch_assoc($allimg);

    while ($img) : ?>
        <h2>
            <a href="./article.php?imgNr=<?php echo $img['id']; ?>">
            <?php echo $img['title']; ?>
            </a>
        </h2>


    <?php
    $img = mysqli_fetch_assoc($allimg);
    endwhile;
}




 ?>
 <?php

require './footer.php';

?>
