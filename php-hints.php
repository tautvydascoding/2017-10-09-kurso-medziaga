
//==========string======
strlen()  - grazina teksto ilgi
strcmp($x, $y)  // return 1 or 0 -1
"." sujungimo zenklas   pvz.:   $z = $text1 . " " . $text2;
$z .= $text1;
$z .= $text2;


//============arrays=========
$human = array("name" => "Tomas", "lname" => "Tomulaitokas", "age" => 13);
echo $human['age']; // 13;

$text = "preke1 : preke2 : preke3 : preke4";
$myArray = explode( " :", text);

$array.count()
$array.sizeof()


//=================
gettype() 
is_array()

// ========out put============
print($name);
echo "vardas $name";
print_r($names);  // atspausdins masyva
die("paskurtinatas tekstas ka matys vartotojas");
printf("uz %s juru stovi %.2f ezerai", "juru", 2.5555);


//==========session=====
session_start(); 
  print_r($_SESSION);
  
  //------------kad lietuviu veiktu------
  // Change character set to utf8
mysqli_set_charset($connection,"utf8");Ç