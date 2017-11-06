<?php

define('DB_USER', 'root' );
define('DB_PASSWORD', 'root' );
define('DB_NAME', 'projektas_neringa' );
define('DB_HOST', 'localhost' );

$connection = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME, 8889);


  function getConnection() {
      global $connection;
      if($connection) {
      } else {
          die ( "Error: " . mysqli_connect_error());
      }
      return $connection;
  }

  function getIstorija($nr) {
      $sql_tekstas = "SELECT * FROM istorijos WHERE id=$nr; ";
      $rezultatai = mysqli_query( getConnection(), $sql_tekstas);

      if ($rezultatai) {
          $rezultatai = mysqli_fetch_assoc($rezultatai);
          return $rezultatai;
      } else {
          echo "Klaida: " . mysqli_error(getConnection());
          return NULL;
      }
  }

  function createComment($vardas, $tema, $emailas, $zinute) {
      $vardas = mysqli_real_escape_string(getConnection(), $vardas);
      $tema = mysqli_real_escape_string(getConnection(), $tema);
      $emailas = mysqli_real_escape_string(getConnection(), $emailas);
      $zinute = mysqli_real_escape_string(getConnection(), $zinute);

      $sql_tekstas = sprintf("INSERT INTO lankytoju_komentarai
                        VALUES ('', '%s', '%s', '%s', '%s');",
                        $vardas,
                        $tema,
                        $emailas,
                        $zinute
                   );
      $rezultatai = mysqli_query(getConnection(), $sql_tekstas);
    //   if(!$rezultatai) {
    //       echo "Nera duomenu <br /> " . mysqli_error(getConnection());
    //   }
  }
