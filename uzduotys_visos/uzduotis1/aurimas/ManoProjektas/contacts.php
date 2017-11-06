<?php
    require_once ("./header.php");
 ?>


        <div class="row" id="kontaktu-antraste">
            <div class="col-md-12">
                <h3 class="baltas-fontas text-center antrasciu-tekstas">Susiekite bet kokiais klausimais apie projektą...</h3>
            </div>
        </div>
        <main class="row" id="kontaktai-main">
            <div class="col-md-12 d-flex align-items-center justify-content-center">
                <form class="w-25" action="email.php" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <input type="text" class="form-control inputas" id="lankytojo-vardas" name="vardas" placeholder="Vardas">
                        <input type="text" class="form-control inputas" id="lankytojo-subject" name="tema" placeholder="Tema">
                        <input type="email" class="form-control inputas" id="lankytojo-email" name="emailAdresas" placeholder="Email adresas">
                        <textarea class="form-control inputas" id="lankytojo-zinute" rows="7" name="zinute" placeholder="Žinutė"></textarea>
                        <button type="submit" name="pateikti" class="btn btn-primary w-100"><img src="./images/send.png"></button>
                    </div>
                </form>
            </div>
        </main>

    <script type="text/javascript" src="./js/Popper.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
    <script type="text/javascript" src="./js/classie.js"></script>
    <script type="text/javascript" src="./js/cbpAnimatedHeader.min.js"></script>
    <script type="text/javascript" src="./js/custom.js"></script>
</body>

</html>
