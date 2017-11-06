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

    function getArticle($nr){
        $sql_tekstas = "select * from articles where id=$nr;";
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

    // print_r(getArticle(1));

    function createArticle($title, $content, $user_id){
        // $sql_textas = "INSERT INTO users values ('', '$vardas', '$slaptazodis', '$elPastas', '$rights');";

        // pasalina simbolius ' \n \t < >
        $title = mysqli_real_escape_string(getConnection(), $title);
        $content = mysqli_real_escape_string(getConnection(), $content);
        $user_id = mysqli_real_escape_string(getConnection(), $user_id);


        $sql_textas = sprintf("INSERT INTO articles
            values ('', '%s', '%s', now(), '%s');
        ",
        $title, $content, $user_id
        );

        $query = mysqli_query(getConnection(), $sql_textas);

        if($query){
            echo "jeeej pavyko sukurti article! <br>";
        } else {
            echo "article sukurti nepavyko" . mysqli_error(getConnection());;
        }
    }

    // createArticle("Filmai", "jata jata jatata", 2);

    function deleteArticle($nr){
        $sql_textas = "delete from articles where id=$nr;";
        $query = mysqli_query(getConnection(), $sql_textas);

        if($query){
            echo "jeeej pavyko istrinti article $nr! <br>";
        } else {
            echo "article istrinti nepavyko" . mysqli_error(getConnection());;
        }
    }

    // deleteArticle(3);

    function updateArticle($nr, $title, $content, $user_id){
        $text = "UPDATE articles
                SET id='$nr',
                title='$title',
                content='$content',
                data=now(),
                user_id='$user_id'
                WHERE id=$nr
                ";
        $query = mysqli_query(getConnection(), $text);

        if($query){
            echo "jeeej pavyko pakeisti article $nr! <br>";
        } else {
            echo "article pakeisti nepavyko" . mysqli_error(getConnection());;
        }
    }

    // updateArticle(1, "Knygos", "mano batai buvo du vienas dingo nerandu", 4);

    function getArticles($kiekis = 999999){
        $text_sql = "SELECT * FROM articles LIMIT $kiekis;";
        $rezultatai = mysqli_query(getConnection(), $text_sql);

        if($rezultatai){
            // $rezultatai = mysqli_fetch_assoc($rezultatai);
            return $rezultatai;
        }
        else {
            echo "Nera nei vieno article <br>";
            return NULL;
        }
    }

    $all_articles = getArticles();
    $temp_article = mysqli_fetch_assoc($all_articles);
    if($temp_article != NULL) {
        while($temp_article){
            echo $temp_article['data'] . "<br>";
            echo $temp_article['title'] . "<br>";
            echo $temp_article['content'] . "<br>";
            echo $temp_article['id'] . "<br>";
            echo $temp_article['user_id'] . "<br>";
            echo "<hr>";
            $temp_article = mysqli_fetch_assoc($all_articles);
        }
    }
