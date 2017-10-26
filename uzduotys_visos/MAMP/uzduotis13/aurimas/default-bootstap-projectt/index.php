<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta charset="utf-8">
        <title>Kuriam Menu</title>
        <link rel="stylesheet" href="./libs/bootstrap/css/bootstrap.css">
        <link rel="stylesheet" href="./css/style.css">
    </head>
    <body>

        <div class="container-fluid">
            <header class="row aukstis-100 bg-warning">
                <ul class="nav justify-content-end col-md-12">
                    <?php
                    $menu = array("Home", "About", "Contact", "Adress");
                    foreach ($menu as $menuKomponentas) {
                        echo "<li class='nav-item'><a class='nav-link' href='#'> $menuKomponentas </a></li>";
                    }
                     ?>
                </ul>
            </header>
            <main class="row ">
                <aside class="col-md-2 bg-primary">

                </aside>
                <section class="col-md-10 bg-success">
                    <?php
                        // $nuotraukos = array("pirmas.jpg", "antras.jpg", "trecias.jpg", "ketvirtas.jpg", "penktas.jpg", "sestas.jpg");
                        //
                        // foreach ($nuotraukos as $fotke) {
                        //     echo "<img class='img-fluid' src='./$fotke'>";
                        //     if($fotke === "trecias.jpg"){
                        //         echo "<hr>";
                        //     }
                        // }

                        $nuotraukos = array(
                            array("pirmas headlinas", "pirmas.jpg", "tomas ziuri i mano kompiuteio ekrana ir mato spyga lololol mano batai buvo u vienas dingo nerandu as su vienu batuku niekuur eiti negaliu, eglute skarota eglute zalia, meskute gauruota ja lanko sile, jos liekna kamiuna stuksena geniai, nauju metu diena ja puos mokiniai!"),
                            array("antras headlinas", "antras.jpg", "erika ziuri i mano kompiuteio ekrana ir mato spyga lololol mano batai buvo u vienas dingo nerandu as su vienu batuku niekuur eiti negaliu, eglute skarota eglute zalia, meskute gauruota ja lanko sile, jos liekna kamiuna stuksena geniai, nauju metu diena ja puos mokiniai!"),
                            array("trecias headlinas", "trecias.jpg", "erika ziuri i mano kompiuteio ekrana ir mato spyga lololol mano batai buvo u vienas dingo nerandu as su vienu batuku niekuur eiti negaliu, eglute skarota eglute zalia, meskute gauruota ja lanko sile, jos liekna kamiuna stuksena geniai, nauju metu diena ja puos mokiniai!"),
                            array("ketvirtas headlinas", "ketvirtas.jpg", "erika ziuri i mano kompiuteio ekrana ir mato spyga lololol mano batai buvo u vienas dingo nerandu as su vienu batuku niekuur eiti negaliu, eglute skarota eglute zalia, meskute gauruota ja lanko sile, jos liekna kamiuna stuksena geniai, nauju metu diena ja puos mokiniai!"),
                            array("penktas headlinas", "penktas.jpg", "erika ziuri i mano kompiuteio ekrana ir mato spyga lololol mano batai buvo u vienas dingo nerandu as su vienu batuku niekuur eiti negaliu, eglute skarota eglute zalia, meskute gauruota ja lanko sile, jos liekna kamiuna stuksena geniai, nauju metu diena ja puos mokiniai!"),
                            array("sestas headlinas", "sestas.jpg", "erika ziuri i mano kompiuteio ekrana ir mato spyga lololol mano batai buvo u vienas dingo nerandu as su vienu batuku niekuur eiti negaliu, eglute skarota eglute zalia, meskute gauruota ja lanko sile, jos liekna kamiuna stuksena geniai, nauju metu diena ja puos mokiniai!"),
                        );

                        for($i = 0; $i < count($nuotraukos); $i++){
                            echo "<div class='text-center korta'><h3>".$nuotraukos[$i][0]."</h3><br>
                            <img src='./".$nuotraukos[$i][1]."'><br>
                            <p>".$nuotraukos[$i][2]."</p></div>";
                                if($i === 2){
                                    echo "<hr>";
                                }
                        }
                     ?>
                </section>
            </main>
        </div>




    </body>
</html>
