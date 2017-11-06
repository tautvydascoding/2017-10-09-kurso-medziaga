<?php
require './header3.php';

$numeriukas = $_GET['straipsnioNr'];
  $rasleva = getImage($numeriukas);

 ?>
<style >
  div.gradient button{
    color: #fff;
  text-shadow: -2px 2px #346392;
  background-color: #007BFF;
  background-image: linear-gradient(top, #6496c8, #346392);
  box-shadow: inset 0 0 0 1px #27496d;
  border: none;
  border-radius: 5px;
  }
  button{
    padding: 10px;
  }
</style>

<hr class="style13">
<div class=" font-2 text-center">
  <h2><?php echo $rasleva['title']; ?></h2>

</div>
<hr class="style13">
<div class="d-flex justify-content-center ">
  <img src="./img/<?php echo $rasleva['name']; ?>" alt="bees">

</div>
<div class=" text-center">
  <p><?php echo $rasleva['description']; ?></p>
</div>
<div class="d-flex justify-content-center gradient">
  <button class="btn-outline-warning" onclick="window.history.back()">Grįžti atgal</button>
</div>







<?php

require './footer.php';

?>
