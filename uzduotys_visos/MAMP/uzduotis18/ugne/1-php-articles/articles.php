<?php
    include("./header.php");
    include("./db_functions2.php");

    $numeris = $_GET['article_id'];
    $kurinys = getArticle($numeris);
?>
    
    <div class="container-fluid">
        <main class="row">
            <section class="col-md-12">
                <article>
                    <h2><?php echo $kurinys['title'];?></h2>
                    <p><?php echo $kurinys['content'];?></p>
                    <div class="laikas">
                        <?php echo $kurinys['date'];?>
                    </div>
                </article>
            </section>
        </main>
    </div>


<?php


    include("./footer.php");

?>