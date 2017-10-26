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
          <header>
            <nav class="row bg-success aukstis-100 d-flex justify-content-end">
              <ul class="col-md-3 float-right">
              <?php

                $punktai = array("Home ", "About ", "Gallery ", "Contacts ");
                foreach ($punktai as $punktas) {
                  echo $punktas;
                }

                ?>

              </ul>
            </nav>
          </header>
          <main class = "row">
            <aside class="col-md-3 aukstis-300 bg-warning">
              Aside
            </aside>
            <section class="col-md-9 d-flex justify-content-center bg-info aukstis-300">
              <?php

                $fotos = array("<img src='1.png'>", "<img src='2.png'>", "<img src='3.png'>", "<img src='4.png'>", "<img src='5.png'>", "<img src='6.png'>");
                  for ($i =0; $i <= 5; $i++) {
                    echo $fotos[$i];
                    echo "<hr class='w-100'>";
                  }


               ?>
            </section>

          </main>
        </div>




    </body>
</html>
