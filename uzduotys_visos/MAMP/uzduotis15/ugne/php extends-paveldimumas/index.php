<?php

/**zmogaus bruozai
*klases pavadinimas is didziosios;
 konstruktorius-funkcija
**/

class Zmogus 
{
    public $aukstis = 0;
    public $svoris = 0;
    private $name = "neturiu";
    function __construct ($auk=0, $sv=0) //ji nk siaip nedaro, default, nebent aprasome
    {
        $this->aukstis = $auk;
        $this->svoris = $sv;
    }
    
    public function kalbeti () 
    {
        echo $this->name . "<br/>";
        echo $this->aukstis . "<br/>";
        echo $this->svoris . "<br/>";
    }
    
        public function getVardas () 
    {
        return $this->name;

    }
        public function setVardas ($name) 
    {
        $this->name = $name;
    }
}

    $urvinis = new Zmogus(165, 60); //sukuriam objekta - urvini zmogu;
    $urvinis2 = new Zmogus(200, 95); //abu turi vienodas reiksmes, bet jei keisim viena - kitas nekis;

    $urvinis->kalbeti();
    $urvinis2->kalbeti();

    echo "urvinio2 aukstis: " . $urvinis2->aukstis . "<br/>";
     echo "urvinio2 aukstis: " . $urvinis2->getVardas() . "<br/>";

    /////
    class Moteris extends Zmogus
    {
        protected $estrogenai = 0; //panasu i private tik paveldimas;
        public function gimdymas() {
            $this->estrogenai -= 500;
        }
        
        public function getEstrogenai () {
            return $this->estrogenai;
        }
        
        public function setEstrogenai ($x) { //cia labiau generic funkcija "$this->estrogenai - = 500;" nes galima naudot kitokiu sk;
            $this->estrogenai = $x;
        }

    }




    //UZD 1
    //funkcijos pagalba sumazinti estrogenus;
    //set Estrogenai(-500);
    
    //sukurti OBJ ir atspausdinti estrogenu skaiciu;
    $gimdytoja = new Moteris();

    $gimdytoja->gimdymas(); 

    echo "estrogenu kiekis:" . $gimdytoja->getEstrogenai() . "<br/>";
    
    
    //sukurti konstruktoriu, kuris nustato pradini estrogenu sk.
     class Moteris2 extends Zmogus
    {
        protected $estrogenai = 0;
        
         function __construct($pradinis) 
        {
            $this->estrogenai = $pradinis;
        }
        
        public function gimdymas() {
            $this->estrogenai -= 500;
        }
        
        public function getEstrogenai () {
            return $this->estrogenai;
        }
        public function setEstrogenai ($x) {
            $this->estrogenai +=  $x;
        }
    }

    //sukurti nauja moters obj

    $gimdytoja2 = new Moteris2(5000);
    
    echo "pradinis estrogenu kiekis:" . $gimdytoja->getEstrogenai() . "<br/>";

    $gimdytoja2->gimdymas();

    echo "estrogenu kiekis po gimdymo:" . $gimdytoja->getEstrogenai() . "<br/>";

    
//////////
    $gimdytoja->aukstis = 188;
    $gimdytoja->svoris = 82;

    echo "moters ugis:" . $gimdytoja->aukstis . "<br/>";
    echo "moters ugis:" . $gimdytoja->svoris . "<br/>";
    echo "moters vardas:" . $gimdytoja->setVardas("oohhaah");
    echo "moters vardas:" .  $gimdytoja->getVardas("oohhaah");
    


/**
* MOKOMES INTERFACE
**/

interface Duomenys {
    public function setVardas();
    public function getVardas();
    public function KMI ();
}

//kuriam klase
class Augintinis extends Zmogus implements Duomenys {
    
    private $name = "no-name";
    public $kmi = 0;
    
    function __construct ($auk=0, $sv=0) //ji nk siaip nedaro, default, nebent aprasome
    {
        $this->aukstis = $auk;
        $this->svoris = $sv;
    }
    public function KMI() {
        $this->kmi = $this->svoris / ($this->aukstis * $this->aukstis);
        
    }
}

//kuriam objekta

    $suo = new Augintinis(65, 60);
    
    $suo->setVardas("Dora");
    $suo->KMI();
    
    echo  "suns vardas: " . $suo->getVardas . "<br/>";
    echo "suns KMI: " . $suo->KMI() . "<br/>";
    