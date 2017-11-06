<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>projektukas projektauskas</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/7.0.0/normalize.min.css">
        <link rel="stylesheet" href="./lib/mdl/material.min.css">
        <script src="./lib/mdl/material.min.js"></script>
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <link href="./lib/bootstrap/css/bootstrap.css" rel="stylesheet" />
        <link href="./lib/font-awesome-4.7.0/css/font-awesome.css" rel="stylesheet" />

        <!--  -->
        <link rel="stylesheet" href="./css/style.css" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/fastclick/1.0.6/fastclick.js"> </script>
            <script src="https://code.jquery.com/jquery-3.2.1.min.js"> </script>
            <script src='./lib/Basic-Cross-platform-One-Page-Scroll-Plugin-jQuery-fullpage/jquery.fullpage.min.js'> </script>

    </head>

    <body>

        <div id="fullpage">


            <section>
                <?php        include_once('./header.php'); ?>
                <?php            include_once('./bod.php'); ?>
            </section>

            <section>
                <?php            include_once('./mid.php'); ?>
            </section>

            <section>
                <?php        include_once('./footer.php'); ?>
            </section>

        </div>

        <script type="text/javascript">
        FastClick.attach(document.body);
        $('#fullpage').fullpage();
        </script>


    </body>

</html>
