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
        // $sql_textas = "INSERT INTO users values ('', '$vardas', '$slaptazodis', '$elPastas', '$rights');";

        // pasalina simbolius ' \n \t < >
        $vardas = mysqli_real_escape_string(getConnection(), $vardas);
        $slaptazodis = password_hash($slaptazodis, PASSWORD_DEFAULT);
        $slaptazodis = mysqli_real_escape_string(getConnection(), $slaptazodis);
        $elPastas = mysqli_real_escape_string(getConnection(), $elPastas);

        $sql_textas = sprintf("INSERT INTO users
            values ('', '%s', '%s', '%s', '%s');
        ",
        $vardas, $slaptazodis, $elPastas, $rights
        );

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
    // $vartotojas = getUser(6);
    // updateUser($nr, $vartotojas['username'], 'slibinas888', $vartotojas['email'], $vartotojas['rights']);
    // // arba
    // updateUser(6, "barbora", "slibinas888", "barbora@gmail.com", "-");

    function getUsers($kiekis = 999999){
        $text_sql = "SELECT * FROM users LIMIT $kiekis;";
        $rezultatai = mysqli_query(getConnection(), $text_sql);

        if($rezultatai){
            // $rezultatai = mysqli_fetch_assoc($rezultatai);
            return $rezultatai;
        }
        else {
            echo "Nera nei vieno vartotojo <br>";
            return NULL;
        }
    }
    // $vartotojai = getUsers();
    // $naudotojas = mysqli_fetch_assoc($vartotojai);
    //
    // if($naudotojas != NULL){
    //     while($naudotojas){
    //         echo "Vartotojo vardas: " . $naudotojas['username']. "<br>";
    //         $naudotojas = mysqli_fetch_assoc($vartotojai);
    //     }
    // }

    // $vartotojas = getUser(1);
    // echo "vartotojo vardas: " . $vartotojas['username'] . '<br />';
    // echo "vartotojo password: " . $vartotojas['pass'] . '<br />';

        mysqli_close(getConnection());
