<?php

define('DB_USER', 'tautvydas10' ); // root
define('DB_PASSWORD', 'tratata' ); // root
define('DB_NAME', 'savaite4' );
define('DB_HOST', 'localhost' );

// prisijungima prie DB, 8889 - mysql portas
$connection = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME, 8889);


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
  $vartotojas = getUser(1);
  echo "vartotojas:" . $vartotojas['username'] . '<br />';
  echo "password:" . $vartotojas['pass'] . '<br />';

  function createUser($vardas, $slaptazodis, $elPastas, $rights ) {
      $text = " INSERT INTO users
                VALUES ('', '$vardas', '$slaptazodis', '$elPastas', '$rights');
              ";
      $query = mysqli_query( getConnection() , $text);
      if ($query) {
          echo "Sukurtas vartototjas <br />";
      } else {
          echo "Eroror: vartotojo nepavyko sukurti " . mysqli_error(getConnection());
      }
  }
  // createUser("Timotis", "natasha", "a@anasha.lt", "-");
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
                WHERE  id =$nr
           ";
    $query = mysqli_query(getConnection(), $text) ;
    if ($query) {
        echo "Pakoreguotas vartotojas nr: $nr <br />";
    } else {
        echo "Eroror: vartotojo Pakoreguoti nepavyko " . mysqli_error(getConnection());
    }
}

  // ====================password keitimas ===============================
  $vartotojas = getUser(6);
  updateUser(6, $vartotojas['username'], 'slibinas888', $vartotojas['email'], $vartotojas['rights'] );
  // ====================ARBA====================
  updateUser(6, "Timotis", "slibinas888", "a@anasha.lt", "-" );
