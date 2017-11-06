<?php

include("./header.php");
include("./db_functions2.php");


$allArticles = getArticles();

if ($allArticles != NULL) {
    $straipsnis = mysqli_fetch_assoc($visiStraipsniai);
    while ($straipsnis) : ?>

        <h2><a href='./article.php?straipsnioNR=<?php echo $straipsnis['id']; ?>'>"
            <?php echo $straipsnis['title']; ?>
        </a>
    </h2>
            <?php
            $straipsnis = mysqli_fetch_assoc($visiStraipsniai);
    endwhile;
}















include("./footer.php");

?>
