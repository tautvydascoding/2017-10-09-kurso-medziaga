<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>gallery</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/7.0.0/normalize.min.css">
        <link href="./lib/bootstrap/css/bootstrap.css" rel="stylesheet" />
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.js"></script>
        <script src="./lib/galleria/galleria-1.5.7.min.js"></script>
        <link rel="stylesheet" href="./css/style.css" />
        <style>
    .galleria{ max-width: 100vw; height: 80vh; background-color: #fff; }
    body {background-color: #abaaaa;}
        </style>
    </head>
    <body>

        <div class="container">
            <div class="row">
                <div class="col-md">
                    <h2 class="gallerijos">gallery</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="galleria">

                <img src="./resursai/photo2.jpg">
                <img src="./resursai/photo3.jpg">
                <img src="./resursai/photo4.jpg">
                <img src="./resursai/photo2.jpg">
                <img src="./resursai/photo3.jpg">
                <img src="./resursai/photo4.jpg">
                <img src="./resursai/photo2.jpg">
                <img src="./resursai/photo3.jpg">
                <img src="./resursai/photo4.jpg">
                    </div>

                </div>
            </div>
            <div class="row">
                <div class="col-md">
                    
                <a class="" href="./index.php">   <h2 class=" galhov gallap  pt-4">go back home</h2> </a>
                </div>
            </div>
        </div>


        <script>
    	(function() {
                Galleria.loadTheme('./lib/galleria/themes/classic/galleria.classic.min.js');
                Galleria.run('.galleria');
            }());
            </script>
    </body>
    <script type="text/javascript" src="./lib/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="./lib/bootstrap/js/bootstrap.js"></script>
    <script type="text/javascript" src="./js/main.js"></script>
</html>
