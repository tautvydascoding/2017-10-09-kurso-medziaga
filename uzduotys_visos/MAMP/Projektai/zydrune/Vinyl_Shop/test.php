<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="main.css">
  </head>
  <body>
    <?php
    include('functions.php');
    ?>

<!-- HEEEEEEEEEELLLLLL YEAAAAH.  -->
<!-- Kaip padaryt, kad  -->
<?php
  $i = 1;
  while($i < 7) :
    ?><div class="vinyl">
      <img src="vinyls/<?php $src = getImageSrc($i);
                             echo $src['src'];?>" alt="" id="vinyl">
      <p><?php $artist = getVinyl($i);
               echo $artist['artist'] . " - " . $artist['name'];?></p>
    </div><?php
    $i++;
  endwhile;
?>

<?php

$all_vinyls = getVinyls();
$all_images = getImageSrcs();

$temp_vinyl = mysqli_fetch_assoc($all_vinyls);
$temp_image = mysqli_fetch_assoc($all_images);
if ($temp_vinyl != NULL && $temp_image != NULL) {
  while ($temp_vinyl && $temp_image ) {
    ?>
      <div class="vinyl">
        <a href="detailed.php?id=<? echo $temp_vinyl["id"]; ?>">
          <img src="vinyls/<?php echo $temp_image['src'] ?>" alt="" id="vinyl">
        </a>
        <a href="detailed.php?id=<? echo $temp_vinyl["id"]; ?>"><p><?php echo $temp_vinyl['artist'] . " - " . $temp_vinyl['name']; ?></p></a>
      </div>
    <?
    $temp_vinyl = mysqli_fetch_assoc($all_vinyls);
    $temp_image = mysqli_fetch_assoc($all_images);
  }
}

?>

  </body>
</html>
