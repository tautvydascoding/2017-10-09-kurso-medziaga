<?php
define('DB_USER', 'root');
define('DB_PASSWORD', 'root');
define('DB_NAME', 'produktai');
define('DB_HOST', 'localhost');

// prisijungimas prie DB
$connection = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
 mysqli_set_charset($connection, 'utf8'); // kai imi is duombazes, kad sql nesugadintu lietuvybiu.



function getConnection(){
  global $connection;
  if ($connection) {
    // echo "sveiki, prisijung prie DB sekmingai <br />";
  }else {
    die ("error: " . mysqli_connect_error());
  }

  return $connection;

}

// function getUser($nr) {
//   $sql_tekstas = "SELECT * FROM users WHERE id = $nr";
//   $rezultatai = mysqli_query(getConnection(),$sql_tekstas);
//   // print_r($rezultatai);
//
//   if ($rezultatai) {
//     // mysqli_fetch_assoc - is Obj sudeda viska i asociatyvu masyva
//     $rezultatai = mysqli_fetch_assoc($rezultatai);
//     return $rezultatai;
//   }else {
//     echo "klaida: " . mysqli_error(getConnection());
//     return NULL;
//   }
// }
// $vartotojas = getUser(7);
// // echo "Vartotojo vardas: " . $vartotojas['username'] . "<br />";
// // echo "Vartotojo slaptazodis: " . $vartotojas['pass'] . "<br />";
// // echo "Vartotojo el. pastas: " . $vartotojas['email'] . "<br />";
//
// function createUser($vardas, $slaptazodis, $elpastas, $rights){
// // $text = "INSERT INTO users VALUES ('', '$vardas', '$slaptazodis', '$elpastas', '$rights')";
//
// // $text = "INSERT INTO users VALUES ('', '$vardas', '$slaptazodis', '$elpastas', '$rights')";
// $vardas = mysqli_real_escape_string(getConnection(),$vardas);//pasalina spec. simbolius (" ' \n \t < > ir t.t)
// $slaptazodis = mysqli_real_escape_string(getConnection(),$slaptazodis);
// $slaptazodis = password_hash($slaptazodis, PASSWORD_DEFAULT);
// $elpastas = mysqli_real_escape_string(getConnection(),$elpastas);
//
//
// $text = sprintf("INSERT INTO users
//                 VALUES ('', '%s', '%s', '%s', '%s');
//                 ",
//                 $vardas,
//                 $slaptazodis,
//                 $elpastas,
//                 $rights
//                 );
// $query = mysqli_query(getConnection(), $text);
// if ($query) {
//   echo "sukure";
// }else {
//   echo "error" . mysqli_error(getConnection());
// }
// }
// // createUser('monia', 'kupka', 'pnpa@anasa.lv', 'admin');
//
// function deleteUser($nr) {
//   $text = "DELETE FROM users WHERE id = $nr";
//   $query = mysqli_query(getConnection(), $text);
//   if (!$query) {
//     echo "Error" . mysqli_error(getConnection());
//   }
// }
//
// deleteUser(4);
//
//
// function updateUser($nr, $vardas, $slaptazodis, $elpastas, $rights){
//
//   $text = "UPDATE users SET id='$nr', username ='$vardas', pass='$slaptazodis', email='$elpastas', rights='$rights'
//   WHERE id=$nr ";
//   $query = mysqli_query(getConnection(), $text);
//   if (!$query) {
//     // echo "Error:  " . mysqli_error(getConnection());
//   }
//
// }
//
// $vartotojas = getUser(7);
// updateUser(7, $vartotojas['username'], 'slibinas', $vartotojas['email'], 'admin');
//
//
// function getUsers($kiekis = 99999) {
// $text_sql = "SELECT * FROM users
//                         LIMIT $kiekis";
// $rezultatai = mysqli_query(getConnection(), $text_sql);
// if ($rezultatai) {
//
//   return $rezultatai;
// } else {
//   echo "nera nie vieno vartotojo <br />";
//   return NULL;
//   }
// }
//
// $vartotojai = getUsers();
// $naudotojas = mysqli_fetch_assoc($vartotojai);
// if ($naudotojas!= NULL) {
//   while ($naudotojas) {
//     // echo "Vartotojo vardas: " . $naudotojas['username'] . "<br />";
//     $naudotojas = mysqli_fetch_assoc($vartotojai); // mysqli_fetch_assoc - vis sekanti ima is objekto ir deda i masyva
//   }
// }
 // Article library
 //getArticle

 function getArticle($nr) {
   $sql_tekstas = "SELECT * FROM articles WHERE id = $nr";
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
 // $straipsnis = getArticle(2);
 // echo "Straipsnio pavadinimas: " . $straipsnis['title'] . "<br />";
 // echo "Straipsnio turinys: " . $straipsnis['content'] . "<br />";
 // echo "Straipsnio data: " . $straipsnis['date'] . "<br />";
 // echo "Straipsnio autorius: " . $straipsnis['user_id'] . "<br />";

 function getImage($nr){
   $sql_img = "SELECT * FROM dbimages WHERE $nr;";
   $rezultatai = mysqli_query(getConnection(),$sql_img);
   if ($rezultatai) {
     // mysqli_fetch_assoc - is Obj sudeda viska i asociatyvu masyva
     $rezultatai = mysqli_fetch_assoc($rezultatai);
     return $rezultatai;
   }else {
     echo "klaida: " . mysqli_error(getConnection());
     return NULL;
   }
 }
 function getImages() {
     $sql_img = "SELECT * FROM dbimages;";
     $rezultatai = mysqli_query(getConnection(), $sql_img);
     if($rezultatai) {

         return $rezultatai;
     } else {
         echo "Nera straipsniu";
         return NULL;
     }
 }
 $allimg = getImages();
 if ($allimg !=NULL) {
 $img = mysqli_fetch_assoc($allimg);
 while ($img) {
  //  echo "Antras " . $img['title'] . "<br />";
   $img = mysqli_fetch_assoc($allimg);
 }
 }


 // createArticle

 function createArticle($title, $content, $user_id){
  $title  = mysqli_real_escape_string(getConnection(),$title );
   $content = mysqli_real_escape_string(getConnection(),$content);


 $text = "INSERT INTO articles VALUES ('', '$title', '$content', NOW(), '$user_id')";

 $query = mysqli_query(getConnection(), $text);
 if ($query) {
   echo "sukure ";
 }else {
   echo "error" . mysqli_error(getConnection());
 }
 }
 // createArticle('straipsnis6', 'textastextastextastextastextasJJJJ', '6');


//deleteArticle
function deleteArticle($nr) {
  $text = "DELETE FROM articles WHERE id = $nr";
  $query = mysqli_query(getConnection(), $text);
  if (!$query) {
    echo "Error" . mysqli_error(getConnection());
  }
}

deleteArticle(5);

//updateArticle

function updateArticle($nr, $title, $content, $date, $user_id){

  // $text = "UPDATE articles SET id='$nr', title ='$title', content='$content', date='$date', user_id='$user_id'
  // WHERE id=$nr";

  $text = sprintf("UPDATE articles
                    SET title='%s',
                    content='%s'
                    WHERE id=$nr;
                  ",
                    $title,
                    $content
                  );

  $query = mysqli_query(getConnection(), $text);
  if (!$query) {
    echo "Error:  " . mysqli_error(getConnection());
  }
}
$straipsnis = getArticle(6);
updateArticle(6, 'pakeistas2', $straipsnis['content'], $straipsnis['date'], $straipsnis['user_id']);


// getArticles

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
// $visiStraipsniai = getArticleS();
// if ($visiStraipsniai !=NULL) {
// $straipsnis = mysqli_fetch_assoc($visiStraipsniai);
// while ($straipsnis) {
//   echo "Antras " . $straipsnis['title'] . "<br />";
//   $straipsnis = mysqli_fetch_assoc($visiStraipsniai);
// }
// }

function getSearch($search) {
  $sql_search = "SELECT * FROM articles WHERE title = % . $search . %" ;
  $rezultatai = mysqli_query(getConnection(), $sql_search);
  if ($rezultatai) {
    $rezultatai = mysqli_fetch_assoc($rezultatai);
    return $rezultatai;
  }else {
    echo "neranda ";
    return NULL;
  }
}











//!!!
// mysqli_close(getConnection());

 ?>
