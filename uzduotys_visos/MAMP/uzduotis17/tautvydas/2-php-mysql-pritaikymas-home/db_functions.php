<?php

define('DB_USER', 'tautvydas10' ); // root
define('DB_PASSWORD', 'tratata' ); // root
define('DB_NAME', 'savaite4' );
define('DB_HOST', 'localhost' );

// prisijungima prie DB, 8889 - mysql portas
$connection = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME, 8889);
mysqli_set_charset($connection, "UTF8");

  function getConnection() {
      global $connection;
      if($connection) {
        //   echo "Sveikiname, prisijungete prie DB sekmingai <br>";
      } else {
          die ( "Error: " . mysqli_connect_error());
      }
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


// !!
// mysqli_close(getConnection());

   //
