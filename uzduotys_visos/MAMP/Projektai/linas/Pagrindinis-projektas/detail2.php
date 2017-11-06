<?php

require './header3.php';

?>
      <hr>
      <main class="row">
        <aside class="col-md-3">
          <div class="product-list font-1">
            <h3 class="font-1 pd-left-40">Produktai</h3>
            <ul>
              <li><a href="detail1.php">Medus</a></li>
              <li><a class="current" href="detail2.php">Korys su medumi</a></li>
              <li><a href="detail3.php">Bičių duonelė</a></li>
              <li><a href="detail4.php">Pikis</a></li>
            </ul>
            <hr class="style13">
                    <div class="">
                          <h6>Avilio gyventojų </h6>

                          <?php include './blog.php' ?>
                    </div>
          </div>
        </aside>
        <?php


            $straipsnis = getArticle(2);
            ?>
        <section class="col-md-9">
          <article class="detail-paragraph font-2">
            <h2 class="font-1"> <i class="fa fa-book" aria-hidden="true"></i> <?php echo $straipsnis['title']; ?></h2>
            <?php echo $straipsnis['content']; ?>
            <!-- <p><strong>Medus su koriu</strong></p>
            <p>Sirgdami sloga, sinusitu, sinusų uždegimu, 4–6 kartus per dieną čiulpkite medų su koriu. Sunkiai susirgę – net 20 kartų per dieną. Korį reikia čiulpti ir kramtyti. Kai medų iščiulpiame, korį reikia išspjauti. Medus su koriais puikiai tinka aterosklerozės profilaktikai – kramtykite po arbatinį šaukštelį kartą ar du per dieną apie du mėnesius.</p>
            <p>Medų reikėtų valgyti kamuojant nemigai, raumenų traukuliams naktimis, pablogėjus atminčiai. Jei dirbate įtemptą protinį darbą, jei esate vyresnio amžiaus žmogus ir pabudęs naktį nebegalite užmigti, suvalgykite 1–3 arbatinius šaukštelius (ar net valgomuosius šaukštus) medaus, užgerkite šiltu vandeniu ar šiltu pienu. Medus nervų sistemą ramina, bet neslopina.</p> -->


          </article>

        </section>

      </main>

      <?php

      require './footer.php';

      ?>
