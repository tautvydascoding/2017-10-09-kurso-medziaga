<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>article</h1>
    <?php

    include('./DB_Function.php');

    // $nr = $_GET['id'];
    // print_r($_GET);
    $straipsnis = getArticle(2);

     ?>

     <h2>Straipsnio pavadinimas: <?php echo $straipsnis['title']; ?></h2>
     <h4>Straipsnio turinys: <?php echo $straipsnis['content']; ?></h4>
     <h4>Straipsnio data: <?php echo $straipsnis['date']; ?></h4>
     <h4>Straipsnio autorius: <?php echo $straipsnis['user_id']; ?></h4>


  </body>
</html>
