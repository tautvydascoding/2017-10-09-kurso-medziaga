<?php
    require_once ("./header.php");
    include("./db_functions.php");
 ?>

        <main class="row">
            <aside class="col-md-1 kaire-paraste">
                <div class="nuorodos">
                    <a href="https://www.facebook.com/kursiu.parkas/" data-toggle="tooltip" data-placement="right" title="Kuršių Nerijos nacionalinio parko Facebook puslapis"><img src="./images/facebooklogo.png" alt="Facebook"></a>
                    <a href="http://www.nerija.lt/" data-toggle="tooltip" data-placement="right" title="Kuršių Nerijos nacionalinio parko web puslapis"><img src="./images/camping.png" alt="Nida"></a>
                    <a href="https://lt.wikipedia.org/wiki/Kur%C5%A1i%C5%B3_nerija" data-toggle="tooltip" data-placement="right" title="Wikipedia apie Kuršių Neriją"><img src="./images/Wikilogo.png" alt="Wikipedia"></a>
                </div>
            </aside>
            <section class="col-md-11">
                <div class="row" id="eile-karusele">
                    <article class="col-md-12 karusele">
                        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                            </ol>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <video class="d-block w-100" src="./video/nidosvideo.mp4" alt="Parnidzio kopa Nida" type="video/mp4" controls></video>
                                    <div class="pagrindinis-pavadinimas baltas-fontas">
                                        <h1 class=".carousel-caption">Kuršių Nerijos</h1>
                                        <h3 class=".carousel-caption">nacionalinis parkas</h3>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="./images/gediminas_saltenis_1.jpg" alt="Parnidzio kopa Nida">
                                    <h6 class=".carousel-caption">Fotografas Gediminas Šaltenis</h6>
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="./images/google_1.jpg" alt="Parnidzio kopa Nida">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="./images/linasbutkevicius_1.jpg" alt="Saulelydis Nida">
                                    <h6 class=".carousel-caption">Fotografas Linas Butkevičius</h6>
                                </div>
                            </div>
                            <a class="carousel-control-prev karuseles-mygtukai" href="#carouselExampleIndicators" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon karuseles-ikonos" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                            <a class="carousel-control-next karuseles-mygtukai" href="#carouselExampleIndicators" role="button" data-slide="next">
                            <span class="carousel-control-next-icon karuseles-ikonos" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                        </div>
                    </article>
                </div>
                <div id="akardeonas" data-children=".item">
                    <div class="row" id="eile-istorija">
                        <h4 class="col-md-6 baltas-fontas text-right antrasciu-tekstas">kuršių nerijos istorija <br>        nuo 5000m prieš KR <br>___ </h4>
                        <article class="col-md-6 text-left">
                                <p class="baltas-fontas pagrindinis-tekstas">
                                    Manoma, kad Neringos teritorijoje pirmieji gyventojai atsikėlė<br> maždaug prieš 4000 metų. Ten kur plačia šakota delta pasibaigia<br> Nemunas, tyvuliuoja Kuršių marios, nuo jūros atitvertos balto <br> smėlio pylimu – nerija.
                                    Padavimai pasakoja, kad čia buvusi mitinio<br> kunigaikščio Videvučio pilis. Nerija – jauniausia Lietuvos pajūrio<br> sausuma. Prieš 5–6 tūkstančius metų jos čia visai nebuvo, tik<br> kur ne kur virš vandens kyšojo salų viršūnės
                                    – klostėsi povandeninė<br> sekluma... </p>
                                <a class="baltas-fontas pagrindinis-tekstas" data-toggle="collapse" data-parent="#akardeonas" href="#istorija-isplesta" aria-expanded="false" aria-controls="istorija-isplesta" id="btn-daugiau"><span>sužinok daugiau...</span></a>
                            </article>
                        </div>
                        <div id="istorija-isplesta" class="collapse" role="tabpanel">

                            <div class="row">
                                <p class="col-md-12 baltas-fontas pagrindinis-tekstas">
                                    ...Palaipsniui ant seklumos slinko smėlis, užpildydamas tarpsalius, keldamas baltą pylimą. Pradžiuvusį smėlį vėjas pustė į kauburius,
                                    iš kurių augo kopos, ištisi kopagūbriai, pradėjo želti žolė, augti medžiai. Neringa priklausė Pietų Kuršo žemėms – Pilsotui ir Lamatai. Pirmoji
                                    gyvenvietė Kuršių nerijoje minima 1385 metais. Apie 1500 metus prasidėjo masiški miško kirtimai, padažnėjo gaisrai, ėmė irti plonas gyvybingasis
                                    dirvos sluoksnis, vėjas ėmė stumti kopas. Jau 1569 m. nerijoje buvo kalbama daugeliu kalbų – vokiečių (įstaigose, bažnyčioje, mokykloje),
                                    lietuviškai, latviškai-kuršiškai ir prūsiškai. Kuršiškai kalbėjo daugiausia žvejai. Pagal 1897 m. gyventojų apklausą, iš 1644 nerijos pagrindinių
                                    gyvenviečių gyventojų 994 (apie 60 proc.) kalbėjo Neringos kuršininkų kalba, tarp žvejų procentas siekė 65 proc. Beveik visi kuršininkai suprato
                                    ir lietuviškai, dėl to lietuviškai buvo laikomos pamaldos.<br><br>
                                    XVI–XVII a. miškus per daug iškirtus, velėna suiro, ir vėjas ėmė gainioti smėlį po neriją. Galiausiai grėsmingų, iki tol nematytai aukštų
                                    smėlio vėpūtinių atbrailos pakibo virš pamario kaimelių. Žmonėms teko palikti smėlyje skęstančias trobas ir keltis kitur. Per XVI–XIX a. iš viso
                                    palaidota 14 kaimų: Senoji ir Naujoji Agila, Naujieji Pilkopiai, Prėda, Kunčiai, Senoji ir Naujoji Latenvaldė, Karvaičiai ir kiti. Dabartinių baltų
                                    kalvų pamatuose liko dūlėti kiemai, sodai, kapai.<br><br>
                                    Vėliau imtasi kopų tvirtinimo darbų. Ties Nida to didelio reikalo pradžią padarė pašto stoties tarnautojas Georgas Dovydas Kuvertas,
                                    apželdindamas Urbo kalvą. Pasodino iš Vakarų Europos atvežtas kalnų pušis, jas kruopščiai prižiūrėjo, skatindamas ir kitus tęsti šį darbą.
                                    Iki XX a. pradžios gyvenvietės buvo tik žvejų kaimai. 1904 m. suformuota prieškopė (apsauginė kopa). Po Pirmojo pasaulinio karo pradėjo
                                    lankytis vasarotojai. Čia juos traukė nepaprastai gražus ir savitas gamtovaizdis: pustomo smėlio kopos, puikūs paplūdimiai.<br><br>
                                    1946 m. vasarvietės Nida, Preila ir Juodkrantė pripažintos miesto tipo gyvenvietėmis, bet 1947 m. buvo prijungtos prie Klaipėdos. Neringos
                                    miestas suformuotas 1961 m. lapkričio 15 d. sujungus penkias gyvenvietes – Alksnynę, Juodkrantę, Nidą, Pervalką ir Preilą. Administraciniu centru
                                    paskirta Nida, tuo pat metu Neringai suteiktas kraštovaizdžio draustinio statusas. 1976 m. Neringa paskelbta miško parku. Miestas plėtotas pagal
                                    1968, 1980 ir 1994 m. bendruosius planus.
                                </p>
                            </div>
                        </div>
                </div>
            </section>
            <section class="pilnas-plotis">
                <div class="row" id="eile-lankytinos-vietos">
                    <div class="col-md-6">
                        <img class="img-fluid" src="./images/raganukalnas_1.jpg" alt="raganu kalnas">
                    </div>
                    <article class="col-md-6 krastovaizdis-tekstas">
                        <h4 class="antrasciu-tekstas">kraštovaizdis</h4>
                        <p class="pagrindinis-tekstas">Tūkstančiai keliautojų kasmet keliasi per Klaipėdos perkėlą<br> į Kuršių Nerijos pusiasalį, pailsėti nuo kasdienių problemų,<br> bei atgauti jėgas unikaliosios parko gamtos apsuptyje.<br> Neringos grožis yra vertinamas tiek Lietuvos,
                            tiek ir<br> užsienio turistų. įspūdingoji Kuršių Nerijos gamta<br> atsiskleidžia fotografų darbuose:</p>
                        <a href="./gallery.php" class="pagrindinis-tekstas"><span>žiūrėti nuotraukas...</span></a>
                    </article>
                </div>
                <div class="row" id="eile-video">
                    <section class="col-md-12">
                        <iframe class="d-block w-100 mx-auto" height="640" src="https://www.youtube.com/embed/7TEWaiKaXgk?controls=0" frameborder="0" allowfullscreen></iframe>
                    </section>
                </div>
                <div class="row" id="eile-lankytoju-patirtis-header">
                    <div class="col-md-12">
                        <h2 class="antrasciu-tekstas baltas-fontas text-center">lankytojų patirtis</h2>
                        <h4 class="baltas-fontas text-center antrasciu-tekstas">kuršių nerijoje</h4>
                    </div>
                </div>
                <div class="row" id="eile-lankytoju-patirtis">
                    <section class="carousel slide" data-ride="carousel" id="postsCarousel">

                        <div class=" p-t-0 m-t-2 carousel-inner">
                            <div class="row row-equal carousel-item active m-t-0">
                                <div class="col-md-3">
                                    <div class="card korta">
                                        <div class="card-img-top card-img-top-250">
                                            <img class="img-fluid" src="./images/<?php $istorija = getIstorija(1); echo $istorija['photo']?>" alt="Nida svyturys prieplauka">
                                        </div>
                                        <div class="card-block p-t-2">
                                            <h4 class="small text-wide p-b-2 antrasciu-tekstas"><?php echo $istorija['name']?></h4>
                                            <p class="card-text pagrindinis-tekstas"><?php echo substr($istorija['comment'], 0, 290);?>
                                            </p>
                                            <div class="card-footer kortu-footer">
                                                <a data-toggle="modal" href="#patirtis-isplesta" class="card-link">
                                                    <p class="text-left antrasciu-tekstas">DAUGIAU</p>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="card korta">
                                        <div class="card-img-top card-img-top-250">
                                            <img class="img-fluid" src="./images/<?php $istorija = getIstorija(2); echo $istorija['photo']?>" alt="nida prieplauka">
                                        </div>
                                        <div class="card-block p-t-2">
                                            <h4 class="small text-wide p-b-2 antrasciu-tekstas"><?php echo $istorija['name']?></h4>
                                            <p class="card-text pagrindinis-tekstas"><?php echo substr($istorija['comment'], 0, 290);?>
                                            </p>
                                            <div class="card-footer kortu-footer">
                                                <a href="#" class="card-link">
                                                    <p class="text-left antrasciu-tekstas">DAUGIAU</p>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="card korta">
                                        <div class="card-img-top card-img-top-250">
                                            <img class="img-fluid" src="./images/<?php $istorija = getIstorija(3); echo $istorija['photo']?>" alt="neringa">
                                        </div>
                                        <div class="card-block p-t-2">
                                            <h4 class="small text-wide p-b-2 antrasciu-tekstas"><?php echo $istorija['name']?></h4>
                                            <p class="card-text pagrindinis-tekstas"><?php echo substr($istorija['comment'], 0, 290);?>
                                            </p>
                                            <div class="card-footer kortu-footer">
                                                <a href="#" class="card-link">
                                                    <p class="text-left antrasciu-tekstas">DAUGIAU</p>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="card korta">
                                        <div class="card-img-top card-img-top-250">
                                            <img class="img-fluid" src="./images/<?php $istorija = getIstorija(4); echo $istorija['photo']?>" alt="Preila">
                                        </div>
                                        <div class="card-block p-t-2">
                                            <h4 class="small text-wide p-b-2 antrasciu-tekstas"><?php echo $istorija['name']?></h4>
                                            <p class="card-text pagrindinis-tekstas"><?php echo substr($istorija['comment'], 0, 290);?>
                                            </p>
                                            <div class="card-footer kortu-footer">
                                                <a href="#" class="card-link">
                                                    <p class="text-left antrasciu-tekstas">DAUGIAU</p>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                </div>
                                <div class="row row-equal carousel-item m-t-0">
                                <div class="col-md-3">
                                    <div class="card korta">
                                        <div class="card-img-top card-img-top-250">
                                            <img class="img-fluid" src="./images/<?php $istorija = getIstorija(5); echo $istorija['photo']?>" alt="Preila">
                                        </div>
                                        <div class="card-block p-t-2">
                                            <h4 class="small text-wide p-b-2 antrasciu-tekstas"><?php echo $istorija['name']?></h4>
                                            <p class="card-text pagrindinis-tekstas"><?php echo substr($istorija['comment'], 0, 290);?>
                                            </p>
                                            <div class="card-footer kortu-footer">
                                                <a href="#" class="card-link">
                                                    <p class="text-left antrasciu-tekstas">DAUGIAU</p>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="card korta">
                                        <div class="card-img-top card-img-top-250">
                                            <img class="img-fluid" src="./images/<?php $istorija = getIstorija(6); echo $istorija['photo']?>" alt="Neringa">
                                        </div>
                                        <div class="card-block p-t-2">
                                            <h4 class="small text-wide p-b-2 antrasciu-tekstas"><?php echo $istorija['name']?></h4>
                                            <p class="card-text pagrindinis-tekstas"><?php echo substr($istorija['comment'], 0, 290);?>
                                            </p>
                                            <div class="card-footer kortu-footer">
                                                <a href="#" class="card-link">
                                                    <p class="text-left antrasciu-tekstas">DAUGIAU</p>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="card korta">
                                        <div class="card-img-top card-img-top-250">
                                            <img class="img-fluid" src="./images/<?php $istorija = getIstorija(7); echo $istorija['photo']?>" alt="kursiu nerija">
                                        </div>
                                        <div class="card-block p-t-2">
                                            <h4 class="small text-wide p-b-2 antrasciu-tekstas"><?php echo $istorija['name']?></h4>
                                            <p class="card-text pagrindinis-tekstas"><?php echo substr($istorija['comment'], 0, 290);?>
                                            </p>
                                            <div class="card-footer kortu-footer">
                                                <a href="#" class="card-link">
                                                    <p class="text-left antrasciu-tekstas">DAUGIAU</p>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 fadeIn wow">
                                    <div class="card korta">
                                        <div class="card-img-top card-img-top-250">
                                            <img class="img-fluid" src="./images/<?php $istorija = getIstorija(8); echo $istorija['photo']?>" alt="neringa">
                                        </div>
                                        <div class="card-block p-t-2">
                                            <h4 class="small text-wide p-b-2 antrasciu-tekstas"><?php echo $istorija['name']?></h4>
                                            <p class="card-text pagrindinis-tekstas"><?php echo substr($istorija['comment'], 0, 290);?>
                                            </p>
                                            <div class="card-footer kortu-footer">
                                                <a href="#" class="card-link">
                                                    <p class="text-left antrasciu-tekstas">DAUGIAU</p>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
                <div class="row" id="eile-ikelti-istorija">
                    <div class="col-md-6 text-right">
                        <button type="button" id="mygtukas-upload" class="btn btn-light text-uppercase antrasciu-tekstas baltas-fontas" data-toggle="modal" data-target="#ikelimo-forma">pasidalinti patyrimais</button>
                    </div>
                    <div class="col-md-6 text-left">
                        <a class="btn btn-outline-secondary prev" href="" title="go back"><i class="fa fa-lg fa-chevron-left"></i></a>
                        <a class="btn btn-outline-secondary next" href="" title="more"><i class="fa fa-lg fa-chevron-right"></i></a>
                    </div>
                </div>
                <div class="modal fade" id="ikelimo-forma" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="ikelimo-formos-pavadinimas">Pasidalinti įspūdžiais</h5>
                            </div>
                            <div class="modal-body">
                                <label class="custom-file w-100">
                                        <div class="form-group">
                                            <form action="email.php" method="post" enctype="multipart/form-data">
                                                <input type="text" class="form-control vartotojo-inputas" name="vardas" placeholder="Vardas" required>
                                                <input type="email" class="form-control vartotojo-inputas" name="elpastas" placeholder="Email"  required>
                                                <textarea class="form-control vartotojo-inputas" name="komentaras" id="lankytojo-komentaras" rows="3" placeholder="Jūsų komentaras" required></textarea>
                                                <input type="file" name="vartotojo-failas" class="form-control-file vartotojo-inputas" required>
                                                <div class="formos-kontrole">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Atšaukti</button>
                                                    <input type="submit" name="submit" class="btn btn-primary" value="Išsaugoti"></button>
                                                </div>
                                            </form>
                                        </div>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="modal fade" id="patirtis-isplesta" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="lankytojo-vardas"><?php echo $nr = $_GET['NR']; $istorija = getIstorija($nr); $istorija['name']?></h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <img src="./images/<?php echo $istorija['photo']?>" alt="Kursiu Nerija">
                                <p><?php echo $istorija['comment']?></p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row" id="eile-zemelapis">
                    <div class="col-md-12">
                        <iframe height="450" frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?q=place_id:ChIJnTtCOmTA5EYRWHrmbeL70Lg&key=AIzaSyBJql9AHfCeGH1ELfogJOJAkBU7OA0DZxI" allowfullscreen></iframe>
                    </div>
                </div>
<?php
    require_once ("./footer.php");
 ?>
