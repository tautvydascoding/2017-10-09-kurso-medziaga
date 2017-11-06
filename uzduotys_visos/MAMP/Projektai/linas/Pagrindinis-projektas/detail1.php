<?php

require './header3.php';

?>
      <hr>
      <main class="row">
        <aside class="col-md-3">
          <div class="product-list font-1">
            <h3 class="font-1 pd-left-40">Produktai</h3>
            <ul>
              <li><a class="current" href="detail1.php">Medus</a></li>
              <li><a href="detail2.php">Korys su medumi</a></li>
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


        $straipsnis = getArticle(1);
        ?>
        <section class="col-md-9">
          <article class="detail-paragraph font-2">
            <h2 class="font-1"><i class="fa fa-book" aria-hidden="true"></i> <?php echo $straipsnis['title']; ?></h2>
            
            <?php echo $straipsnis['content']; ?>
            <!-- <p><strong>Medaus rūšys</strong></p>
            <p><em><strong>Liepų medus</strong></em> – šviesiai geltonas, malonaus liepų žiedų kvapo. Vartojamas gydyti peršalimo ligoms (sloga, angina, faringitas, laringitas, bronchitas), kepenų bei inkstų ligoms, pūliuojančioms žaizdoms gydyti.</p>
            <p><em><strong>Aviečių medus</strong></em> – šviesios spalvos, malonaus, bet stiproko kvapo. Vartojamas gydyti peršalimo ligoms.</p>
            <p><em><strong>Kiaulpienių medus</strong></em> – aukso spalvos, kartoko skonio, labai kvapnus. Rekomenduojamas nuo skausmo, kvėpavimo takų uždegimo, padidintam skrandžio sulčių rūgštingumui mažinti.</p>
            <p><em><strong>Rapsų medus</strong></em> – baltas arba šviesiai gelsvas, silpno malonaus kvapo, truputį kartoko skonio. Vartojamas padidintam skrandžio sulčių rūgštingumui mažinti, kepenų ligoms gydyti.</p>
            <p><em><strong>Dobilų medus</strong></em> – šviesiai gelsvas, beveik baltas, švelnaus malonaus skonio. Vartojamas sumažinto skrandžio sulčių rūgštingumui didinti, kepenų ligoms gydyti.</p>
            <p><em><strong>Viržių medus</strong></em> – tamsiai geltonas su rusvu atspalviu, stipraus, panašaus į viržių žiedų kvapą, kartoko skonio. Vartojamas inkstų, šlapimo pūslės, prostatos ligoms gydyti.</p>
            <p><em><strong>Grikių medus</strong></em> – tamsus, rausvas arba beveik rudas, aštraus skonio bei kvapo. Jis turi daugiau geležies ir baltymų, todėl vartojamas nuo mažakraujystės, švelnina vaikų brendimo metu atsirandančius augimo skausmus, ramina nervų sistemą, stiprina organizmą.</p>
            <p><em><strong>Pievų medus</strong></em> yra poliflorinis, t.y. surinktas iš daugelio augalų žiedų, malonaus skonio, geltonas arba gelsvai rusvos spalvos. Jame yra daug aromatinių medžiagų, nemažai B grupės ir C vitaminų. Jis vertingas nusilpusiems ir peršalimo ligoms gydyti.</p>
            <p><em><strong>Lipčiaus medus</strong></em>, surinktas iš amarų išskyrų, skiriasi nuo žiedų medaus. Jame daugiau dekstrinų, mineralinių medžiagų, sacharozės, mažiau invertuoto cukraus, negu nektaro meduje. Ypač daug lipčiuje yra šarminių metalų – kalio ir natrio druskų.<br/>
              Kadangi lipčiaus meduje mažiau vandens ir daugiau baltymų, dekstrinų, jis 2-3 kartus tirštesnis už žiedų medų. Bičiųžiemos maistui lipčiaus medus netinka, o žmogui jis labai naudingas.</p>
              <p>Sveikatai stiprinti reikia naudoti tik natūralų kokybišką medų. Patartina suvartoti 50 -100 g medaus per parą ,šį kiekį suvalgant per 3 -4 kartus.Geriausia medų ištirpinti šiltame virintame vandenyje, tuomet organizmas lengviau jį įsisavina.</p> -->

          </article>

        </section>

      </main>


      <?php

      require './footer.php';

      ?>
