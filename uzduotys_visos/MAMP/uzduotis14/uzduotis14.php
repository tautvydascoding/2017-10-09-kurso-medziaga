// =====================extends=====================

		 // uzduotis: sukurti klases "Gyvunas", "Tipas" - kuri paveldi Gyvunas, "Liutas" - kuri paveldi Tipas
		 Gyvunas:
					   public $alive = true;
					  public $positionX;
					  public $positionY;
		 Tipas:
			public $rusis = "kate";
			public $minta = "mesa";
		Liutas:
						public $kailis = true;
						public $spalva = "#a34baa";
		// uzduotis 1: pakeisti visu triju liutu spalvas (ir pakeitimus atspausdinti)
         // uzduotis2: Liuto klasei susikurti privatu kintamaji "Name". ir uskurti 2 funkcijas jo reiksmei pakeisti ir paimti "setName($x)", "getName()".
              
		  // uzduotis 3:
		  // 1) sukurti dvi klases: User, Admin
		  // 2) User klase turi kintamuosius : username, password, rights ir funkcija Login($name, $pass)
		  // 3) Admin klase  funkcijas:  changeUserName($nm),  changeRights($rgt)
