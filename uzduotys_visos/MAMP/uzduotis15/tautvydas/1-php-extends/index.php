<?php


    /**
     * zmogaus savybes
     */
    class Zmogus
    {
        public $aukstis = 0;
        public $svoris = 0;
        private $vardas = "neturiu";
        function __construct($auk = 0, $sv = 0)
        {
             $this->aukstis = $auk;
             $this->svoris = $sv;
        }
        public function kalbeti() {
                echo $this->vardas . " <br />";
                echo $this->aukstis . " <br />";
                echo $this->svoris . " <br /><br />";
        }
        public function getVardas() {
                return $this->vardas;
        }
        public function setVardas ( $x) {
            $this->vardas = $x;
        }
    }

    $urvinis = new Zmogus(165, 60);
    $urvinis2 = new Zmogus(200 );
    $urvinis->kalbeti();
    $urvinis2->kalbeti();

    echo "urvinio2 vardas: " . $urvinis2->getVardas() . " <br />";


    /**
     *
     */
    class Moteris extends Zmogus
    {
        protected $estrogenai = 0; // kaip private, tik galima paveldeti
        function __construct ($x = 3000) {
            $this->estrogenai = $x;
        }
        public function gimdymas() {
             $this->estrogenai -= 500;
        }
        public function getEstrogenai (){
            return $this->estrogenai;
        }
        public function setEstrogenai ($x){
              $this->estrogenai += $x;
        }
    }
    $urvineMoteris = new Moteris(4500);
    echo "estrogenu skaicius: " .  $urvineMoteris->getEstrogenai() . "<br>";
     $urvineMoteris->gimdymas();
     echo "estrogenu skaicius po gimdymo: " .  $urvineMoteris->getEstrogenai() . "<br>";

        // uzduotis 1 funkcijos pagalba sumazinti estrogenus 500
        // B susikurti obj ir atspausdinti estrogenu skaiciu
        // atspausdinit moters obj estrogenu skiaciu pries ir po gimgymo
        // C susikurti konstruktoriu, kuris nustato pradini estrogenu skaiciu
        // C2 susikurti nauja moters obj
        // isspausdinti moters objekto estrogenu skaiciu pries gimdyma ir po
        // uzduotis 2
        // A obj-tui moteris nustatyti : aukstis 170, svoris 65, vardas "Rozita"
        // B atspaudinti ^ moters duomenis
    $urvineMoteris->aukstis = 188;
    $urvineMoteris->svoris = 82;
    echo "moters ausktis ir svoris: " . $urvineMoteris->aukstis . "<br />";
    echo "moters ausktis ir svoris: " . $urvineMoteris->svoris . "<br />";
    $urvineMoteris->setVardas("Rozaura");
    echo "moters vardas: " . $urvineMoteris->getVardas() . "<br />";

    /**
     *
     */
    interface InterfaceName
    {
        public function setVardas($x);
        public function getVardas();
        public function KMI();
    }

    /**
     *
     */
    class Augintinis extends Zmogus implements InterfaceName
    {
        private $kmi = 0;

        public function setVardas($x) {
             $this->vardas = $x;
        }
        public function getVardas( ) {
            return $this->vardas;
        }
        public function KMI() {
            $this->kmi = $this->svoris /  ($this->aukstis * $this->aukstis);
            return $this->kmi;
        }
    }
    $gerasSuo = new Augintinis();
    $gerasSuo->aukstis = 0.50;
    $gerasSuo->svoris = 9;
    echo " KMI yra: " . $gerasSuo->KMI() . "<br />";
    $gerasSuo->setVardas("Sraigius");
    echo "vardas yra: " . $gerasSuo->getVardas() . "<br />";


    //testosteronas
