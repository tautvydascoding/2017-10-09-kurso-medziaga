<?php

// kuriam prisijungimo konstantas
define('DB_USER', 'root');
define('DB_PASSWORD', 'root');
define('DB_NAME', 'savaite4');
define('DB_HOST', 'localhost');
// prisijungiam prie duomenu bazes, 8889 - mysql portas
$connection = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME, 8889);


    function getConnection() {
            global $connection;
            if($connection){
                    // echo "Sveikiname, prisijungete sekmingai <br>";
            } else {
                die ("Error: " . mysqli_connect_error());
            }

        return $connection;
    }

    function getUser($nr){
        $sql_tekstas = "select * from users where id=$nr;";
        $rezultatai = mysqli_query(getConnection(), $sql_tekstas);

        if($rezultatai){
            // suvedam viska is objekto i associatyvu masyva
            $rezultatai = mysqli_fetch_assoc($rezultatai);
            return $rezultatai;
        } else {
            echo "klaida: " . mysqli_error(getConnection());
            return NULL;
        }
    }

    function createUser($vardas, $slaptazodis, $elPastas, $rights){
        // $sql_textas = "INSERT INTO users set ('' , "$vardas", "$slaptazodis", "$elPastas", "$rights");'
        $sql_textas = "INSERT INTO users values8 ('', '$vardas', '$slaptazodis', '$elPastas', '$rights');";
        $query = mysqli_query(getConnection(), $sql_textas);

        if($query){
            echo "jeeej pavyko sukurti vartotoja! <br>";
        } else {
            echo "vartotojo sukurti nepavyko" . mysqli_error(getConnection());;
        }
    }

    function deleteUser($nr){
        $sql_textas = "delete from users where id=$nr;";
        $query = mysqli_query(getConnection(), $sql_textas);

        if($query){
            echo "jeeej pavyko istrinti vartotoja $nr! <br>";
        } else {
            echo "vartotojo istrinti nepavyko" . mysqli_error(getConnection());;
        }
    }

    function updateUser($nr, $vardas, $slaptazodis, $elPastas, $rights){
        $text = "UPDATE users
                SET id='$nr',
                username='$vardas',
                pass='$slaptazodis',
                email='$elPastas',
                rights='$rights'
                WHERE id=$nr
                ";
        $query = mysqli_query(getConnection(), $text);

        if($query){
            echo "jeeej pavyko pakeisti vartotoja $nr! <br>";
        } else {
            echo "vartotojo pakeisti nepavyko" . mysqli_error(getConnection());;
        }
    }
// password keitimas
    $vartotojas = getUser(6);
    updateUser($nr, $vartotojas['username'], 'slibinas888', $vartotojas['email'], $vartotojas['rights']);
    // arba
    updateUser(6, "barbora", "slibinas888", "barbora@gmail.com", "-");

    $vartotojas = getUser(1);
    echo "vartotojo vardas: " . $vartotojas['username'] . '<br />';
    echo "vartotojo password: " . $vartotojas['pass'] . '<br />';

    createUser("Timotis", "okupacija1", "loveputin@one.lt", "-");
    $vartotojas = getUser(4);
    echo "vartotojo vardas: " . $vartotojas['username'] . '<br />';
    echo "vartotojo password: " . $vartotojas['pass'] . '<br />';

    deleteUser(2);


 ?>
