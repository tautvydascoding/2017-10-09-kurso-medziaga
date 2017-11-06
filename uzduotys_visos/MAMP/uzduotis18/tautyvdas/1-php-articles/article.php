<?php
    include("./header.php");
    include("./db_functions2.php");

    $numeriukas = $_GET['straipsnioNr'];
    $rasleva = getArticle($numeriukas);
?>
    <main class="row">
        <section class="col-md-12">
            <article>
                <h2>
                    <?php echo $rasleva['title'];?>
                 </h2>
                <p>
                    <?php echo $rasleva['content'];?>
                 </p>
                <div class="laikas">
                    <?php echo $rasleva['date']; ?>
                </div>

            </article>
        </section>
    </main>


<?php
    include("./footer.php");

 ?>
