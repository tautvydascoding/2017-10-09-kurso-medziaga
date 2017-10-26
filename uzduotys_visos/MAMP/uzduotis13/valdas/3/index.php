<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta charset="utf-8">
        <title>PHP</title>
        <link rel="stylesheet" href="./libs/bootstrap/css/bootstrap.css">
        <link rel="stylesheet" href="./css/style.css">
    </head>
    <body>
        <div class="container">
            <header class="row d-flex justify-content-end">
                    <nav class="nav mb-4">

                        <?php

                        $menu=array("Home", "About", "Gallery", "Contacts");

                        foreach ($menu as $item) {

                            ?><a class="nav-link" href="#"><?php echo $item; ?></a>
                            <?php
                        }
                        ?>
                    </nav>
            </header>

            <main class="row">
                <aside class="col-md-2 bg-info">

                </aside>
                <section class="col-md-10">
                    <div class="row pl-2">
                        <?php

                        $images=array("lova.jpg","lova.jpg","lova.jpg","lova.jpg","lova.jpg","lova.jpg","lova.jpg");

                        for ($i = 0; $i < count($images); $i++) {
                            if ($i != 0 && $i % 3 === 0 ) {
                                echo "<hr class='w-100' />";
                            }
                            echo "<div class='col-md-4 p-3'>
                                    <img class='img-fluid' src='" . $images[$i] . "' alt=''>
                                </div>";
                        }
                        ?>
                    </div>
                </section>


            </main>
        </div>


    </body>
</html>
