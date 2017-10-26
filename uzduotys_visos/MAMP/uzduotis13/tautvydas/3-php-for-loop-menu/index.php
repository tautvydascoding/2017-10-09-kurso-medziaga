<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta charset="utf-8">
        <title></title>
        <link rel="stylesheet" href="./libs/bootstrap/css/bootstrap.css">
        <link rel="stylesheet" href="./css/style.css">
    </head>
    <body>

        <div class="container-fluid">
            <header class="row">
                <div class="col-md-12">
                    <nav class="nav nav-invert navbar float-right">
                        <ul class=" ">
                            <?php
                                $menuItems = array("Home", "About", "Gallery", "Contacts");
                                foreach ($menuItems as $item) {
                                     echo "<li class='nav-item'> $item </li>";
                                }
                            ?>
                        </ul>
                    </nav>
                </div>
            </header>

            <main class="row">
                <aside class="col-md-3    aukstis-300 bg-info">
                    Reklama
                </aside>
                <section class="col-md-9  aukstis-300 bg-warning">
                    <div class="row">
                        <?php
                            $nuotraukos = array('1.jpg','2.jpg','3.jpg','4.jpg','5.jpg','6.jpg');
                            for ($i=0; $i < 6; $i++) {
                         ?>

                                <div class="col-md-4">
                                    <img class="img-fluid" src="./images/<?php echo   $nuotraukos[$i]; ?>" >
                                </div>

                          <?php
                            }
                         ?>

                </section>
            </main>


        </div>
    </body>
</html>
