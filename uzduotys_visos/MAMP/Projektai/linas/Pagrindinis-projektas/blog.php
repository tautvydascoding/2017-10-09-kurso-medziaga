<?php





    $allArticles = getImages();
    if ($allArticles !=NULL) {
        //mysqli_fetch_assoc paima straipsni ir sudeda i masyva
        $straipsnis = mysqli_fetch_assoc($allArticles);

        while ($straipsnis) : ?>
            <h4>
                <a href="./article.php?straipsnioNr=<?php echo $straipsnis['id']; ?>">
                <?php echo $straipsnis['title']; ?>
                </a>
            </h4>


        <?php
        $straipsnis = mysqli_fetch_assoc($allArticles);
        endwhile;
    }




 ?>
