<?php

require './header.php';

?>
    <!--  svarbus tekstas -->
    <hr>
    <div class="row">
      <div class="col-md-2">
      </div>
      <div class="col-md-1 mr-50">
        <img  src="./img/bite4.jpg" alt="bite">
      </div>

      <div class=" col-md-6 important-text mr-100">
        <h3 class="font-1"> <i class="fa fa-pencil-square-o" aria-hidden="true"></i> Klauskite arba palikite atsiliepimą</h3>
      </div>

      <div class="col-md-3">
      </div>
    </div>
    <hr>
    <!-- adresas, tel numris, el pastas -->
    <div class="row mr-100">
      <div class="col-md-4">
        <h4 class="text-center"> <i class="fa fa-road"></i> Bityno adresas</h4>
        <p class="text-center font-1">Tytuvenai, Kelmes r.</p>
      </div>
      <div class="col-md-4">
        <h4 class="text-center "> <i class="fa fa-phone"></i> Telefono numeris</h4>
        <p class="text-center font-1">+37061464551</p>
      </div>
      <div class="col-md-4">
        <h4 class="text-center"> <i class="fa fa-envelope"></i> Elektroninis paštas</h4>
        <p class="text-center font-1">puikusmedus@niamniam.lt</p>
      </div>
    </div>
    <hr>
    <!-- kontaktu lengele -->
    <div class="row mr-50 ">
      <div class="col-md-3">
      </div>
      <div class="col-md-6 pd-0">
        <form action="email.php" method="get" class="wrapper">
          <div class="row area-mr">
            <div class="col pd-left-0 ">
              <input type="text" name="name" class="form-control bg3" placeholder="Vardas">
            </div>
            <div class="col pd-right-0 ">
              <input type="email" name="email" class="form-control bg3" placeholder="Elektroninis paštas">
            </div>
            <textarea name="message" class="form-control area-mr bg3" rows="10" placeholder="Žinutė"></textarea>
          <button type="submit" class="btn btn-outline-primary form-control bg3">Išsiųsti pranešimą</button>
        </div>
        </form>
      </div>
      <div class="col-md-3">
      </div>
    </div>
    <!--  zemelapis -->
    <!-- <div class="row mr-50 background-blue">
      <div class="col-md-1 area-mr">

      </div>
      <div class="col-md-1 area-mr">

      </div>
      <div class="col-md-8 d-flex justify-content-center area-mr">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d9176.405153752596!2d23.899585700043787!3d54.90114441706032!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x6d45a6bafa6b4f64!2sUndin%C4%97%2C+laisvalaikio+centras%2C+UAB+Kauno+undin%C4%97!5e0!3m2!1slt!2slt!4v1508265420399"
          width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
      </div>
      <div class="col-md-1 area-mr">

      </div>
      <div class="col-md-1 area-mr">

      </div>
    </div> -->

          <div class="font-1 mr-50">
            <h3 class="text-center">Atsiėmimo punktai</h3>

          </div>

    <div class="row d-flex justify-content-center mr-50">
      <div class="col-md-12 d-flex justify-content-center">
        <p>
        <a class="btn btn-outline-primary" data-toggle="collapse" href="#multiCollapseExample1" aria-expanded="false" aria-controls="multiCollapseExample1">Kaunas</a>
        <button class="btn btn-outline-primary" type="button" data-toggle="collapse" data-target="#multiCollapseExample2" aria-expanded="false" aria-controls="multiCollapseExample1">Tytuvėnai</button>
        <button class="btn btn-outline-primary" type="button" data-toggle="collapse" data-target=".multi-collapse" aria-expanded="false" aria-controls="multiCollapseExample1 multiCollapseExample2">Abu adresai</button>
      </p>
      </div>
        </div>
      <div class="row mr-20">
        <div class="col-md-6">
          <div class="collapse multi-collapse show" id="multiCollapseExample1">
            <div class="card card-body">
              <iframe src="https://www.google.com/maps/embed?pb=!1m17!1m11!1m3!1d3!2d23.88211373182153!3d54.93792025544067!2m2!1f223!2f90!3m2!1i1024!2i768!4f75!3m3!1m2!1s0x46e7220e526e5937%3A0x2d98a25c45fb96fa!2sEoltas!5e0!3m2!1slt!2slt!4v1508315106252" width="400" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
          </div>
        </div>
          </div>
        <div class="col-md-6">
          <div class="collapse multi-collapse" id="multiCollapseExample2">
            <div class="card card-body">
              <iframe src="https://www.google.com/maps/embed?pb=!1m17!1m11!1m3!1d3!2d23.88211373182153!3d54.93792025544067!2m2!1f223!2f90!3m2!1i1024!2i768!4f75!3m3!1m2!1s0x46e7220e526e5937%3A0x2d98a25c45fb96fa!2sEoltas!5e0!3m2!1slt!2slt!4v1508315106252" width="400" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
          </div>
        </div>


      </div>






    <!-- Footer -->
    <footer class="row bg-info mr-50 aukstis-70 d-flex align-items-center">
      <div class="col-md-3">
      </div>
      <div class="col-md-6 d-flex justify-content-center  ">
        <p class="font-footer footer-margin-bottom">Niam Niam 2017 &copy Copyright </p>
      </div>
      <div class="col-md-1">
        <img src="./img/f1.png" alt="fb">
      </div>
      <div class="col-md-1">
        <img src="./img/f2.png" alt="tweet">
      </div>
      <div class="col-md-1">
        <img src="./img/f3.png" alt="Yahoo">
      </div>
    </footer>

  </div>



  <script type="text/javascript" src="./libs/jquery-3.2.1.min.js">
  </script>
  <script type="text/javascript" src="./libs/bootstrap/js/bootstrap.min.js">
  </script>
</body>
/
</html>
