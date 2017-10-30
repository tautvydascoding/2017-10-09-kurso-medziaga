<?php


  define('DB_USER', 'tautvydas10' ); // root
  define('DB_PASSWORD', 'tratata' ); // root
  define('DB_NAME', 'savaite4' );
  define('DB_HOST', 'localhost' );

  // prisijungima prie DB, 8889 - mysql portas
  $connection = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME, 8889);

  if($connection) {
      echo "Sveikiname, prisijungete prie DB sekmingai <br>";
  } else {
      die ( "Error: " . mysqli_connect_error());
  }
  function getConnection() {
      return $connection;
  }


  function getUser($nr) {
      $sql_tekstas = "  "; // tekstas
      $rezultatai = mysqli_query( getConnection(), $sql_tekstas);
      print_r( $rezultatai );
      if ($rezultatai) {

      }
  }

  // getUser(0);
