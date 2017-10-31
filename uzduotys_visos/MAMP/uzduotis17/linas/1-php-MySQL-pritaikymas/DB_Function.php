<?php
define('DB_USER', 'root');
define('DB_PASSWORD', 'root');
define('DB_NAME', 'savaite4');
define('DB_HOST', 'localhost');

// prisijungimas prie DB
$connection = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);



function getConnection(){
  global $connection;
  if ($connection) {
    // echo "sveiki, prisijung prie DB sekmingai <br />";
  }else {
    die ("error: " . mysqli_connect_error());
  }

  return $connection;

}

function getUser($nr) {
  $sql_tekstas = "SELECT * FROM users WHERE id = $nr";
  $rezultatai = mysqli_query(getConnection(),$sql_tekstas);
  // print_r($rezultatai);

  if ($rezultatai) {
    // mysqli_fetch_assoc - is Obj sudeda viska i asociatyvu masyva
    $rezultatai = mysqli_fetch_assoc($rezultatai);
    return $rezultatai;
  }else {
    echo "klaida: " . mysqli_error(getConnection());
    return NULL;
  }
}
$vartotojas = getUser(7);
// echo "Vartotojo vardas: " . $vartotojas['username'] . "<br />";
// echo "Vartotojo slaptazodis: " . $vartotojas['pass'] . "<br />";
// echo "Vartotojo el. pastas: " . $vartotojas['email'] . "<br />";

function createUser($vardas, $slaptazodis, $elpastas, $rights){
// $text = "INSERT INTO users VALUES ('', '$vardas', '$slaptazodis', '$elpastas', '$rights')";

// $text = "INSERT INTO users VALUES ('', '$vardas', '$slaptazodis', '$elpastas', '$rights')";
$vardas = mysqli_real_escape_string(getConnection(),$vardas);//pasalina spec. simbolius (" ' \n \t < > ir t.t)
$slaptazodis = mysqli_real_escape_string(getConnection(),$slaptazodis);
$slaptazodis = password_hash($slaptazodis, PASSWORD_DEFAULT);
$elpastas = mysqli_real_escape_string(getConnection(),$elpastas);


$text = sprintf("INSERT INTO users
                VALUES ('', '%s', '%s', '%s', '%s');
                ",
                $vardas,
                $slaptazodis,
                $elpastas,
                $rights
                );
$query = mysqli_query(getConnection(), $text);
if ($query) {
  echo "sukure";
}else {
  echo "error" . mysqli_error(getConnection());
}
}
// createUser('monia', 'kupka', 'pnpa@anasa.lv', 'admin');

function deleteUser($nr) {
  $text = "DELETE FROM users WHERE id = $nr";
  $query = mysqli_query(getConnection(), $text);
  if (!$query) {
    echo "Error" . mysqli_error(getConnection());
  }
}

deleteUser(4);


function updateUser($nr, $vardas, $slaptazodis, $elpastas, $rights){

  $text = "UPDATE users SET id='$nr', username ='$vardas', pass='$slaptazodis', email='$elpastas', rights='$rights'
  WHERE id=$nr ";
  $query = mysqli_query(getConnection(), $text);
  if (!$query) {
    // echo "Error:  " . mysqli_error(getConnection());
  }

}

$vartotojas = getUser(7);
updateUser(7, $vartotojas['username'], 'slibinas', $vartotojas['email'], 'admin');


function getUsers($kiekis = 99999) {
$text_sql = "SELECT * FROM users
                        LIMIT $kiekis";
$rezultatai = mysqli_query(getConnection(), $text_sql);
if ($rezultatai) {

  return $rezultatai;
} else {
  echo "nera nie vieno vartotojo <br />";
  return NULL;
  }
}

$vartotojai = getUsers();
$naudotojas = mysqli_fetch_assoc($vartotojai);
if ($naudotojas!= NULL) {
  while ($naudotojas) {
    // echo "Vartotojo vardas: " . $naudotojas['username'] . "<br />";
    $naudotojas = mysqli_fetch_assoc($vartotojai); // mysqli_fetch_assoc - vis sekanti ima is objekto ir deda i masyva
  }
}



//!!!
// mysqli_close(getConnection());












 ?>
