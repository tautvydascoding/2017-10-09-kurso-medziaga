<?php

require './header3.php';

?>

<main class="row">
  <aside class="col-md-3">
    <div class="">
      <h3>Produktai</h3>
      <?php include './detailx.php' ?>
    </div>
  </aside>
  <section class="col-md-9">
    <article class="">
      <h2 class="font-1"><i class="fa fa-book" aria-hidden="true"></i> <?php echo $straipsnis['title']; ?></h2>

    </article>
  </section>

</main>











<?php

require './footer.php';

?>
