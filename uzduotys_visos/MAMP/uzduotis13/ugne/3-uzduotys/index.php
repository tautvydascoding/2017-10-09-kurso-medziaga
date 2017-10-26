<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Mokomes php</title>
        <link rel="stylesheet" href="../libs/bootstrap/css/bootstrap.css">
         <link rel="stylesheet" href="./style.css">
    </head>
    <body>
     
         
          
        <div class="container-fluid">
            <header class="row">
                <div class="col-md-12">
                <nav>
                    <ul>
        <?php
    //UZD1
    //sukurti meniu masyva
    //atspausditi visus meniu punktus i HTML
            $meniu = array("Home", "About", "Gallery", "Contact");
           /* echo "<li>" . $meniu[0] . "</li>";
            echo "<li>" . $meniu[1] . "</li>";
            echo "<li>" . $meniu[2] . "</li>";
            echo "<li>" . $meniu[3] . "</li>";*/
                    
    //ARBA su foreach
            foreach ($meniu as $key) {
                echo "<li>" . $key . "</li>"; 
            }
    //ARBA su for
            //for ($i=0; $meniu<=3, $i++) {} 
         ?>
                   </ul>
                </nav>
                </div>
            </header>
        </div>
        <div class="container-fluid">
            <main class="row">
                <aside class="col-md-2">
                </aside>
                <section class="col-md-9">
                      <?php
                        //susikurti aside, section ir masyva, ir saugot 6 paveiksliuku duomenis/pavadinimus; isspausdinti i masyva 3-bruksnys-3;       
                        $images = array("concert.jpg", "header.jpg", "iphone.jpg", "microphone.jpg", "pencil_sharpener.jpg", "writing.jpg");
                        foreach ($images as $key) {
                            echo "<img class='img-thumbnail' src='./images/" . $key ."'>";
                            if ($key == "iphone.jpg") {
                            echo "<br/><div class='line'></div>";
                            }
                        }
                    
                        $images = array("concert.jpg", "header.jpg", "iphone.jpg", "microphone.jpg", "pencil_sharpener.jpg", "writing.jpg");
                    
                        $headline = "<h3>Antraste</h3>";
                    
                        $text = "<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>";
                        
                        $images2 = array(
                            array($headline, $images[0], $text),
                            array($headline, $images[1], $text),
                            array($headline, $images[2], $text),
                            array($headline, $images[3], $text),
                            array($headline, $images[4], $text),
                            array($headline, $images[5], $text)
                        );
                        
                        for ($i=0; $images2[i][k] < 5; i++) {
                            
                        }
                        
                    ?>
                </section>
            </main>
        </div>
    </body>
</html>