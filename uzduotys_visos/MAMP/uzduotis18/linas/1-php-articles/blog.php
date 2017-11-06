<?php

    include("./header.php");

    include("./db_functions2.php");

    $allArticles = getArticles();
    if ($allArticles !=NULL) {
        //mysqli_fetch_assoc paima straipsni ir sudeda i masyva
        $straipsnis = mysqli_fetch_assoc($allArticles);

        while ($straipsnis) : ?>
            <h2>
                <a href="./article.php?straipsnioNr=<?php echo $straipsnis['id']; ?>">
                <?php echo $straipsnis['title']; ?>
                </a>
            </h2>


        <?php
        $straipsnis = mysqli_fetch_assoc($allArticles);
        endwhile;
    }



    include("./footer.php");
 ?>
