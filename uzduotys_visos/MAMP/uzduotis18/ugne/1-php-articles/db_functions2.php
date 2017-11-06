<?php

define ('DB_USER', 'ugne10');
define ('DB_PASSWORD', 'tratata');
define ('DB_NAME', 'savaite4');
define ('DB_HOST', 'localhost');

$connection = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME); //saugo prisijungima prie DB. host, username, password, database, port, socket;

if($connection) {
    echo "Login successful";
}else {
    die ("Error: " . mysqli_connect_error()); //parodys mazdaug koks error;
}

function getConnection () {
    global $connection;
    return $connection;
}

  function getUser($nr) {
      $sql_tekstas = "SELECT * FROM users WHERE id=$nr; "; // tekstas
      $rezultatai = mysqli_query( getConnection(), $sql_tekstas);
    //   print_r( $rezultatai );

      if ($rezultatai) {
          // mysqli_fetch_assoc - is Obj sudeda viska i asociatyvu masyva
          $rezultatai = mysqli_fetch_assoc($rezultatai);
          return $rezultatai;
      } else {
          echo "Klaida: " . mysqli_error(getConnection());
          return NULL;
      }
  }
  // $vartotojas = getUser(1);
  // echo "vartotojas:" . $vartotojas['username'] . '<br />';
  // echo "password:" . $vartotojas['pass'] . '<br />';

  function createUser($vardas, $slaptazodis, $elPastas, $rights ) {
    //   $text = " INSERT INTO users
    //             VALUES ('', '$vardas', '$slaptazodis', '$elPastas', '$rights');
    //           ";

    // pasalina spec. simbolius "  ' \n \t < >
    $vardas = mysqli_real_escape_string(getConnection(), $vardas);
    $slaptazodis = mysqli_real_escape_string(getConnection(), $slaptazodis);
    $slaptazodis = password_hash($slaptazodis, PASSWORD_DEFAULT);
    $elPastas = mysqli_real_escape_string(getConnection(), $elPastas);

      $text = sprintf(" INSERT INTO users
                        VALUES ('', '%s', '%s', '%s', '%s');
                     ",
                        $vardas,
                        $slaptazodis,
                        $elPastas,
                        $rights
                   );
      $query = mysqli_query( getConnection() , $text);
      if ($query) {
          echo "Sukurtas vartototjas <br />";
      } else {
          echo "Eroror: vartotojo nepavyko sukurti " . mysqli_error(getConnection());
      }
  }
  // createUser("Rozaura", "kupka", "peitkus@anasha.lt", "admin");
  // $vartotojas = getUser(4);
  // echo "vartotojas:" . $vartotojas['username'] . '<br />';
  // echo "password:" . $vartotojas['pass'] . '<br />';

  function deleteUser($nr) {
    $text = "DELETE FROM users WHERE id=$nr; ";
    $query = mysqli_query( getConnection() , $text);
    if ($query) {
        echo "Istrintas vartotojas nr: $nr <br />";
    } else {
        echo "Eroror: vartotojo nepavyko istrinti " . mysqli_error(getConnection());
    }
  }
   // createUser("Timotis", "natasha", "a@anasha.lt", "-");
   // createUser("Timotis", "natasha", "a@anasha.lt", "-");
   // createUser("Timotis", "natasha", "a@anasha.lt", "-");
  // deleteUser(5);

function updateUser($nr, $vardas, $slaptazodis, $elPastas, $rights) {
    $text = "UPDATE users
                 SET    id='$nr',
                        username='$vardas',
                        pass='$slaptazodis',
                        email='$elPastas',
                        rights='$rights'
                WHERE   id =$nr
           ";
    $query = mysqli_query(getConnection(), $text) ;
    if ($query) {
        echo "Pakoreguotas vartotojas nr: $nr <br />";
    } else {
        echo "Eroror: vartotojo Pakoreguoti nepavyko " . mysqli_error(getConnection());
    }
}

  // ====================password keitimas ===============================
  // $vartotojas = getUser(6);
  // updateUser(6, $vartotojas['username'], 'slibinas888', $vartotojas['email'], $vartotojas['rights'] );
  // // ====================ARBA====================
  // updateUser(6, "Timotis", "slibinas888", "a@anasha.lt", "-" );


 function getUsers($kiekis = 999999) {
     $text_sql = " SELECT * FROM users
                            LIMIT $kiekis;
                    ";
     $rezultatai = mysqli_query(getConnection(), $text_sql);

     if($rezultatai) {
         return $rezultatai;
     } else {
         echo "Nera nei vieno vartotojo <br>";
         return NULL;
     }
 }
// mysql rezultatu objektas
// $vartotojai = getUsers( );
// // mysqli_fetch_assoc - obj pavercia i masyva
//  $naudotojas = mysqli_fetch_assoc($vartotojai);
//
// if($naudotojas != NULL) {
//     while ( $naudotojas ) {
//          echo "Vartotojo vardas: " . $naudotojas['username'] . "<br>";
//          $naudotojas = mysqli_fetch_assoc($vartotojai);
//     }
// }

//=====================================================================
function getArticle($nr) {
    $sql_tekstas = "SELECT * FROM articles WHERE id=$nr; "; // tekstas
    $rezultatai = mysqli_query(getConnection(), $sql_tekstas);
    if(  $rezultatai ) {
        $rezultatai = mysqli_fetch_assoc($rezultatai);
        return $rezultatai;
    } else {
        echo "Nera duomenu <br /> " . mysqli_error(getConnection());
        return NULL;
    }
}
// $article = getArticle(2);
// print_r($article);


function deleteArticle($nr) {
    $sql_tekstas = "DELETE FROM articles WHERE id=$nr; "; // tekstas
    $rezultatai = mysqli_query(getConnection(), $sql_tekstas);
    if($rezultatai) {
        return $rezultatai;
    } else {
        echo "Nera duomenu <br /> " . mysqli_error(getConnection());
        return NULL;
    }
}
// deleteArticle(2);
function createArticle($title, $content, $user_id ) {
     $title = mysqli_real_escape_string(getConnection(), $title);
     $content = mysqli_real_escape_string(getConnection(), $content);
     $user_id = mysqli_real_escape_string(getConnection(), $user_id);
    
     $sql_tekstas = "INSERT INTO articles VALUES(
                        '',
                        '$title',
                        '$content',
                         NOW(),
                        '$user_id'
                    )"; // tekstas
    //ARBA $sql_tekstas = sprintf("INSERT INTO articles VALUES(
    //'','%s','%s', NOW(),'%s')", $title, $content, $user_id);
    // tekstas 
    $rezultatai = mysqli_query(getConnection(), $sql_tekstas);
    if($rezultatai) {
    } else {
        echo "Nera duomenu <br /> " . mysqli_error(getConnection());
    }
}
//createArticle("Antraste bitutes", "Straipsnis ilgas...", 3);

function updateArticle($antraste, $turinys, $nr) {
    //reikia apsaugoti:
    $antraste = mysqli_real_escape_string(getConnection(), $antraste);
    $turinys = mysqli_real_escape_string(getConnection(), $turinys);
    $nr = mysqli_real_escape_string(getConnection(), $nr);
    
    $sql_text = sprintf("UPDATE articles
                            SET title = '%s',
                                content = '%s'
                            WHERE id=%s;
                        ", $antraste, $turinys, $nr
                       );
    $result = mysqli_query(getConnection(), $sql_text);
    if (!$result) {
        echo "Klaida" . mysqli_error() . "<br/>";
    }
}

function getArticles() {
    $sql_text = "SELECT * FROM articles;";
    $rezultatai = mysqli_query(getConnection(), $sql_text);
    if($rezultatai) {
        return $rezultatai;
    } else {
        echo "Nera straipsniu";
        return NULL;
    }
}

  /*  $visitStraipsniai = getArticle(1);
    if($visitStraipsniai !=NULL) {
        $straipsnis = mysqli_fetch_assoc($visitStraipsniai);
        while ($straipsnis) {
            echo "Antraste:" $straipsnis['title'] . "<br/>";
            $straipsnis = mysqli_fetch_assoc($visitStraipsniai);
        }
    }*/
//updateArticle("Kaunas", "Kauno mariose gyveno drakonas", 3);

// !!
// mysqli_close(getConnection());

   //
