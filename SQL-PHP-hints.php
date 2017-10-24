<?php


	//----------------------prisijungiame prie DB------------------
	  // prisijungiame prie DB
	  $connection = mysqli_connect( SERVERNAME, USERNAME, PASSWORD, DB_NAME );
	  if ($connection) {
		  echo "Sveikinu! Prisijungei prie DB";
	  } else {
		echo "ERROR:: ===Prisijungti prie DB nepavyko=== " .  mysqli_connect_error();
	  }
  
  	    //------------kad lietuviu veiktu------
	  // Change character set to utf8
		mysqli_set_charset($connection,"utf8");
		
		
	// "$sql" paprastas kintamasis (String) - kuris saugo SQl komanda
	  // $sql = "INSERT INTO doctors VALUES ('', 'Karl', 'Tomson'); ";
	  // $sql = "INSERT INTO doctors ( id, name, lname) VALUES ('', 'Karl', 'Tomson');";

		// mysqli_query - atlieka SQL veiksmus (kurie aprasyti $sql kintamajam)
	  $arPavykoSQL = mysqli_query($connection, $sql );

	  if( $arPavykoSQL ) {
		echo " SQL pavyko ivykdyti";
	  } else {
		echo "ERROR:: SQL nepavyko ivykdyti!!!" .  mysqli_connect_error();
	  }

	  
	  // -----------------functions-------------------------
	    // prijungia prie DB
        function jungtis_DB($sname, $user, $pass, $dbName) {
              $c =  mysqli_connect( $sname, $user, $pass, $dbName );
              // jeigu neprisijunge
              if (!$c) {  // $c == false
                  die ("ERROR: nepavyko prisijungti prie DB " . mysqli_connect_error()) ;
              }
              return $c;
        }
        $connection = jungtis_DB(SERVERNAME, USERNAME, PASSWORD, DB_NAME);
	 //--------------------insert data-------------------------
	    //  sukurti funkcija, kuri i DB ideda daktara
        function createDoctor($con, $name, $lastName) {
             $s = "INSERT INTO doctors VALUES ('', '$name', '$lastName' );";
             $arPavykoSQL = mysqli_query($con, $s);

             if ($arPavykoSQL == false) {
               echo "ERROR: createDoctor() - sukurti daktaro nepavyko: " . mysqli_error($connect) . " <br>";
             }
        }
        // createDoctor($connection, "Bill", "Kolt" );
		//----- OR (saugesnis budas)-----
		//$first_name = $_POST['first_name'];
		//$first_name = htmlspecialchars( $first_name );
		//echo $first_name;
		// $first_name = $_POST['first_name'];
		// $first_name = strip_tags( $first_name );
		// echo $first_name;
		
		function insertUser ($connection, $username, $userlname, $pass, $ac )  {
			// http://php.net/manual/en/function.sprintf.php
          $sql = sprintf(
            "INSERT INTO users ( name, lname, password, ac) VALUES ('%s', '%s', '%s', '%s') ",
			// https://www.w3schools.com/php/func_mysqli_real_escape_string.asp
			// mysqli_real_escape_string - Required. The string to be escaped. Characters encoded are NUL (ASCII 0), \n, \r, \, ', ", and Control-Z.
            mysqli_real_escape_string($connection, $username),
            mysqli_real_escape_string($connection, $userlname),
            md5($pass),
            mysqli_real_escape_string($connection, $ac)
          );

          // idedame i DB
           $arPavykoSQL = mysqli_query($connection, $sql );

           if( $arPavykoSQL ) {
             echo " Pavyko ivykdyti";
           } else {
             echo " Nepavyko ivykdyti!!!" . mysqli_error($connect) . " <br>";
           }
       }
		//  insertUser($con, "Kaleda", "Perrauskutis", "aaa123", 3312477713);
		//-------------------------get single data----------------
	  // uzduotis 3:  sukurti f-ja, kuri grazina nurodyta daktara  "getDoctor($connect,$id)"
        function getDoctor($connect, $id) {
            $sql = "SELECT * FROM doctors WHERE id = $id";
            $result = mysqli_query($connect, $sql );
            if ($result == false) {
                echo "ERROR: tokio daktaro nera" . mysqli_error($connect) . " <br>";
            }
            return $result;
        }
		// ----OR ---- 
		  function getUser ($con, $id) {
			$sql = sprintf(
					"SELECT * FROM users
					  WHERE users.id = '%s' ",
					  mysqli_escape_string($con, $id)
				   );
			$result = mysqli_query($con, $sql);
			if( $result ) {
			  $user = mysqli_fetch_assoc($result);
			  print_r($user);
			} else {
			  echo "Vartotojas nerastas!!!" . mysqli_error($connect) . " <br>";
			}
		  }
			getUser($con, 2);
			
		//-------------------------get all data------------------
		        // uzduotis 2:  sukurti f-ja, kuri grazina visus daktarus    "getDoctors()"
        function getDoctors($con) {
          $query = "SELECT * FROM doctors
                  ORDER BY name, lname ASC";
          $result = mysqli_query($con, $query);

            // suskaldysime result'atus eilutemis ir  tikriname ar radome kazka pagal uzklausa
          if( mysqli_num_rows($result) > 0 ) {   
		      print_r($result);
              return $result;
          } else {
              echo "Rasta 0 resultatu " . mysqli_error($connect) . " <br>";
              return null;
          }
        }
        $doctors = getDoctors($connection);
        $eil = mysqli_fetch_assoc($doctors);
        while( $eil) {
          // print_r($eil);
          // echo "<br />";
          echo "Username: " . $eil['name']." Lastname:  ".$eil['lname']."<br>";
          $eil = mysqli_fetch_assoc($doctors); // paima sekancia "eilute" / masyva
        }
	  // uzduotis 4:  sukurti f-ja, kuri pakeicia nurodyto daktaro reiksmes "updateDoctor"
          function updateDoctor($con, $id, $dName, $dLName) {
              $query = "UPDATE doctors SET name= '$dName', lname='$dLName'
                        WHERE id = $id";
              $arPavyko = mysqli_query($con, $query);
              if (!$arPavyko) {
                echo " ERROR: nepavyko pakeisti daktaro: $id";
              }
          }
          // updateDoctor($connection, 1, "Will", "Smitt");
          // printDoctor($connection, 2);
		  
		  
		  
		  //-----------------------------FORMOS DUOMENYS I DB----------------
			  // ================= Formos duomenu israsymas i DB ========

			// uzdavinys:
			// issaugoti paciento duomneis is registracijos formos DB

					
			  $db_username = "tautvydas04"; // root
			  $db_password = "tratata"; // root
			  $db_servername = "localhost";
			  $db_name = "ligonine4";

			  $connnection  = mysqli_connect($db_servername, $db_username, $db_password, $db_name );

			  if(  $connnection == false ) {
				// echo "Ivyko klaida.  ".mysqli_connect_error();
				die ("ivyko klaida".mysqli_connect_error());
			  } else {
				echo "Sekmingai Prisijungta prie duomenu bazes <br>";
			  }

			  function createPacient($connect, $pName, $pLName, $doct_id) {
				// $query = "INSERT INTO pacients
				//           VALUES ('', '$pName', '$pLName', '$doct_id')";
				// $query = sprintf(
				//         "INSERT INTO pacients
				//           VALUES ('', '%s', '%s', '%s')",
				//           $pName,
				//           $pLName,
				//           $doct_id
				//         );
				$query = sprintf(
						"INSERT INTO pacients
						  VALUES ('', '%s', '%s', '%s')",
						  mysqli_real_escape_string($connect, $pName),
						  mysqli_real_escape_string($connect, $pLName),
						  mysqli_real_escape_string($connect, $doct_id)
						);
				// neveikia siuo metu
				// $query =  "INSERT INTO pacients
				//           VALUES ('',
				//             " .  mysqli_real_escape_string($connect, $pName) . ",
				//             " .   mysqli_real_escape_string($connect, $pLName). ",
				//             " .   mysqli_real_escape_string($connect, $doct_id)
				//           .")";

				$arPavyko = mysqli_query($connect, $query);
				if (!$arPavyko) {
				  echo "ERROR:: nepavyko sukurti paciento" . mysqli_error($connect) . " <br>";
				}
			  }

			  createPacient ($connnection,  $_POST['firstname'],  $_POST['lastname'],  $_POST['doct_id']);


			//  echo  "Last name: " . $_POST['lastname'];
			//  print_r($_POST);
?>