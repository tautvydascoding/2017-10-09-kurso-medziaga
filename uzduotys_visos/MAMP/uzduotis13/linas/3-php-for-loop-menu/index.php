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
              <div class="col-md-12 bg-info">


            <nav class=" float-right ">
              <ul>
                <?php
                $index = array('home', 'about', 'gallery', 'contact' );
                foreach ($index as $key) {
                    echo "<il class='nav-item'> $key </il>";
                }


                ?>
              </ul>

          </nav>
      </div>




          </header>
          <main class="row">
              <aside class="col-md-3 aukstis-300 bg-info">

              </aside>
              <section class="col-md-9 aukstis-300 bg-success">

                  <?php
                  $images = array('1.jpg', '2.jpg', '3.jpg', '4.jpg', '5.jpg', '6.jpg');
                  for ($i=0; $i < 6; $i++) {
                      echo " <img class='img-fluid' src='./images/" . $images[$i] ."' >";
                  }
                      ?>
                      



              </section>

          </main>




        </div>




    </body>
</html>
