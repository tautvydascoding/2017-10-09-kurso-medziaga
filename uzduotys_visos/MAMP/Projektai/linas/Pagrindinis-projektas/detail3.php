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
              <li><a href="detail2.php">Korys su medumi</a></li>
              <li><a class="current" href="detail3.php">Bičių duonelė</a></li>
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

                $straipsnis = getArticle(3);
                ?>
        <section class="col-md-9">
          <article class="detail-paragraph font-2">
            <h2 class="font-1"><i class="fa fa-book" aria-hidden="true"></i>Bičių duonelė</h2>
            <?php echo $straipsnis['content']; ?>
            <!-- <p><strong>Bičių duonelė</strong>– žiedadulkės bičių suneštos iš įvairiausių augalų sudėtos į korio akutę ir subrandintos.</p>
            <p>Bitės neša į avilius ir meta į korių akeles. Aviliuose jaunesnės bitės priekiniais žandais žiedadulkių rutulėlius sutrupina ir galvomis gerai suspaudžia. Taip bitės dirba, kol žiedadulkėmis užlipdo du trečdalius akutės tūrio. Į tą pačią akutę dėdamos įvairių augalų žiedadulkes, bitės jų nerūšiuoja. Kai akutės pripildomos, bitės jų viršų užpila medumi, užlipdo vašku – tokį mišinį palieka subręsti.
            </p>
            <p>Veikiant įvairiems mikroorganizmams, fermentams, esant didelei drėgmei ir šilumai (34–36 °C), maždaug per dvi savaites iš mišinio susiformuoja bičių duonelė. Bitėms tai – pagrindinis baltymų, riebalų, angliavandenių, mikroelementų ir vitaminų šaltinis.</p>
            <p>Duonele maitinami bičių perai, kuriems augant reikia labai daug baltyminės medžiagos. Daug duonelės bitės vartoja pieneliui, vaškui gaminti, tranams maitinti, nes ir jie be baltyminio maisto greitai nusilpsta, o tokius tranus bitės išmeta lauk.</p>
            <p>Nustatyta, kad bičių šeima per metus suvartoja apie 30–40 kg duonelės.</p>
            <p>Bičių duonelės privalumai.<br>Dažnai kyla klausimas, koks produktas vertingesnis: žiedadulkės ar bičių duonelė? Kai kuriomis savybėmis bičių duonelė lenkia žiedadulkes. Pastarųjų metų tyrimais nustatyta, kad bičių duonelę lengviau įsisavina žmogaus organizmas. Šio konservuoto bičių produkto savybės laikui bėgant mažai kinta ir bičių duonelę galima ilgiau vartoti negu žiedadulkes. Biocheminiu požiūriu bičių duonelė, skirtingai negu žiedadulkės, turi mažiau baltymų (tik apie 20 proc.), žymiai daugiau angliavandenių (24-34 proc.) ir iki 1,5 proc. lipidų. Savo kaloringumu bičių duonelė prilygsta augalinės kilmės maisto produktams – miltams, ryžiams, žirniams. Iš daugelio mineralinių medžiagų bičių duonelėje daugiausia yra geležies, kobalto, fosforo ir kalcio. Aminorūgštys sudaro apie 15 proc. bičių duonelės sausųjų medžiagų. Bičių duonelės vitaminų sudėtis yra analogiška žiedadulkėms, tačiau bičių duonelėje yra didesnis vitamino K kiekis ir žymiai mažesnis vitamino E kiekis.
            <br>Bičių duonelės biologiškai aktyvių medžiagų kiekis irgi skiriasi nuo žiedadulkių, nes bičių duonelėje gausu tokių fermentų kaip sacharazė, amilazė, katalazė, aminotransferazė ir adenozintrifosfatazė. Be to bičių duonelėje yra organinių rūgščių, kai kurių hormonų, pigmentų, o taip pat medžiagų, pasižyminčių antibiotinėmis savybėmis. Visuma tokių svarbių organizmo gyvybiniams procesams medžiagų ir sąlygoja ryškų biosti-muliuojantį bičių duonelės poveikį.
            <br>Pastarųjų metų tyrimai parodė, kad bičių duonelė, skirtingai nuo medikamentų, neturi nepageidaujamo ar toksinio poveikio. Joje esantis mažas vitamino E ir estrogenų kiekis suteikia galimybę ją profilaktiškai vartoti įvairaus amžiaus žmonėms ir net vaikams. Alergijos atvejai bičių duonelei labai reti.
            <br>Bičių duonelė rekomenduojama asmenims, sergantiems mažakraujyste, hepatitu, cukriniu diabetu, virškinamojo trakto, ypač žarnyno (fermentiniai kolitai, enterokolitai, lėtiniai vidurių užkietėjimai) ligomis. K.Valiukienės ir bendraautorių atlikti tyrimai parodė, kad bičių duonelė gerina pagyvenusio amžiaus žmonių sveikatą, mažina cholesterolio kiekį kraujyje. Neseniai atlikti tyrimai įrodė, kad bičių duonelė sergantiems vyresnio amžiaus asmenims cukriniu diabetu ne tik sumažino cholesterolio kiekį kraujyje, bet ir sustiprino šių ligonių imuninę sistemą.
            <br>Bičių duonelę profilaktiškai rekomenduojama vartoti po 10-15 g per dieną, o gydymo tikslais – po 20-30 g per dieną.
            </p> -->

          </article>

        </section>

      </main>

      <?php

      require './footer.php';

      ?>
