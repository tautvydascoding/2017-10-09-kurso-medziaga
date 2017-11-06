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
              <li><a href="detail3.php">Bičių duonelė</a></li>
              <li><a class="current" href="detail4.php">Pikis</a></li>
            </ul>
            <hr class="style13">
                    <div class="">
                          <h6>Avilio gyventojų </h6>

                          <?php include './blog.php' ?>
                    </div>
          </div>
        </aside>
        <?php
                $straipsnis = getArticle(4);
                ?>
        <section class="col-md-9">
          <article class="detail-paragraph font-2">
            <h2 class="font-1"><i class="fa fa-book" aria-hidden="true"></i> <?php echo $straipsnis['title']; ?></h2>
            <?php echo $straipsnis['content']; ?>
            <p><strong>Istoriniai duomenys</strong></p>
            <p>Jau žiloje senovėje žmonės žinojo, kad bičių pikis gydo žaizdas, mažina skausmą ir tinimą, šalina blogą kvapą. Pirmieji bičių pikį gydymui pradėjo vartoti bitininkai, kurie pastebėjo, kad avilyje arba drevėje, kur gyvena bičių šeima, yra labai švaru. <br>Liaudies medicinoje bičių pikis dažniausiai vartojamas kaip išorinis, gana retai – kaip vidinis vaistas. Juo gydydavo votis, kitas pūlingas žaizdas, karpas, nuospaudas, nudegimus. Bičių pikiu aplipdyta drobe apvyniodavo skaudamus sąnarius. Nuo to skausmai sumažėdavo ar visai išnykdavo. Bičių pikiu taip pat gydydavo skrandžio opą, plaučių tuberkuliozę, tulžies pūslės ligas, paradantozę. Bičių pikis vartotas ne tik liaudies medicinoje, bet ir kitiems tikslams. Pavyzdžiui, Egipte pikį su medumi vartodavo mirusiems balzamuoti, pikio sakus – smuiko lakui, sodininkystėje – sodo tepalui gaminti.<br>Vašku, nektaru ir žiedadulkėmis, užklijuoja avilio plyšius, kad į jį nepatektų pašaliniai gyviai, pritvirtina korius. Jei vis dėlto tokie gyviai į avilį patenka, bitės juos sugelia ir apklijuoja pikiu -užbalzamuoja. Pikis bičių šeimai padeda avilyje išsaugoti švarą, apsaugo bičių šeimą nuo nuolat gresiančios išorinės infekcijos. Kai saulės spinduliai įšildo avilį, esantis avilyje bičių pikis išskiria lakiąsias eterines medžiagas, kurioms būdingos anti-mikrobinės savybės, todėl jos gerai dezinfekuoja avilį. Tai padeda bitėms apsisaugoti nuo invazinių ligų, o bitynui suteikia tam tikrą mikroklimatą.
            </p>
            <p><strong>Bičių pikio sudėtis</strong></p>
            <p>Bičių pikis yra tamsiai pilka arba rusva tampri masė, turinti stiprų, bet malonų aromatą. 15 laipsnių temperatūroje pikis tampa tampriu ir kietu, o pašildytas iki 30 laipsnių – minkštu ir lipniu. Pikis blogai tirpsta karštame vandenyje, bet gerai spirite ir eteryje.
            <br>Cheminiu požiūriu bičių pikis yra labai sudėtingas junginys. Jį sudaro įvairios aromatinės medžiagos (apie 55 proc.), vaškas (apie 30 proc.), eterinis aliejus (apie 10 proc.) ir žiedadulkės (apie 5 proc.). Nustatyta, kad daugiausia pikyje yra flavanoidų (apie 25 proc.). Tai sudėtingi eteriai, terpenai (bisabololas, pferostilbenas, fenolino trigliceroidai), organinės rūgštys (benzoinė, vanilinė ir kitos), vanilino ir izovanilino aldehidai, betulenas, betulenolas ir t.t. Pikyje taip pat yra daug įvairių mineralinių medžiagų: mangano, cinko, vario, nikelio, kobalto, kalcio, kalio, fosforo, sieros, natrio, geležies, magnio. Jų kiekiai nedideli ir būna į nuo pėdsakų iki 11,6 mkg/100 g. Vitaminų pikyje yra nedaug: Bp B2, B6, C, E, A, nikotininė ir pantoteno rūgštys. Pikyje yra nuo 8 iki 17 aminorūgščių. Iš jų svarbiausios – serinas, gliukolis, alaninas, triptofanas, leicinas, lizinas, histidinas, metioninas, valinas. Be to, pikyje yra sudėtingų riebalinių rūgščių, įvairių angliavandenilių, daug inhibitorių, antimikrobinių ir kitų biologiškai aktyvių medžiagų.
            </p>
            <p><strong>Ar bičių pikis nekenksmingas?</strong></p>
            <p>Prieš kurį laiką mūsų respublikos populiarioje literatūroje buvo pareikšta mintis, kad bičių pikis – tai derva, turinti kancerogeninių savybių ir gali sukelti vėžį. Tačiau mokslinė literatūra šių minčių nepatvirtino. A.Derevič (Rumunija) atliko kruopščius eksperimentinius tyrimus su žiurkėmis. Joms buvo injekuotas bičių pikio tirpalas, ir po 6 mėn. morfologiškai ištirti jų vidaus organai. Nepastebėta jokių pakitimų, iš kurių būtų galima spręsti apie pikio kancerogeniškumą. Taip pat literatūroje nėra duomenų apie švino ir kitų sunkiųjų metalų kaupimąsi pikyje. S.Popravka, B.Ochotskis ir kiti mokslininkai, atlikę cheminius pikio tyrimus, švino arba visai nerado, arba rado jo tik nežymius pėdsakus. Tačiau bitininkams reikia laikytis atsargumo. Jau anksčiau buvo minėta, kad bitynai turi būti kuo mažiau užterštoje aplinkoje, neleistina laikyti juos arti asfaltuotų kelių ar magistralių.
            <br>Aišku, bičių pikio teigiamų savybių nereikia pervertinti. Gydantis pikio preparatais, reikia laikytis gydytojo apiterapeuto nustatytų dozių (ypač vaikams). Bičių pikio kaip vidinio vaisto arba aerozolio nepatartina ruošti namų sąlygomis. Tiek išoriniam, tiek vidiniam vartojimui pikį ir jo preparatus gali skirti tik gydytojai.
            </p>
            <p><strong>Kada negalima vartoti bičių pikio?</strong></p>
            <p>Nors mūsų turimomis žiniomis bičių pikio kenksmingumo nenustatyta, tačiau pastebėta, kad kai kurie žmonės yra jam jautrūs arba alergiški. Jį turi atsargiai vartoti sergantieji bronchine astma, egzema ar kitomis alerginėmis ligomis. Pastebėjus nuo bičių pikio alergines reakcijas, jo vartojimą reikia nutraukti.</p>
            <p><strong>Bičių pikio ir jo preparatų laikymo sąlygos</strong></p>
            <p>Surinktas bičių pikis, turi būti laikomas tamsioje, vėsioje gerai vėdinamoje patalpoje, plastmasiniuose maišeliuose. Spiritiniai ir aliejiniai pikio preparatai ir jų mišiniai su medumi turi būti sufasuoti į tamsius stiklo sandariai uždarytus indus. Tokiomis sąlygomis jie išlaiko optimalų savo aktyvumą iki dviejų metų.</p>

          </article>

        </section>

      </main>

      <?php

      require './footer.php';

      ?>
