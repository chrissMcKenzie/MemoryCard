<?php
	//PAGE PAR DEFAUT
	$laPage = 'view/accueil.php';
	$titre = "Accueil";
	//phpinfo();

    if(isset($_GET['page'])) {		// l'URL complétée par ?page=x fournit le no de page souhaité
		$page = $_GET['page'];
		//système qui permet de savoir la page à charger
		switch ($page) {
			case 1 :
				$laPage = 'controller/personnes.php';
				$titre = 'PersonnesAA';
				break;

			case 2 :
				$laPage = 'controller/films.php';
				$titre = 'Films';
				break;

				case 3 :
					$laPage = "controller/detailPersonne.php"; // l'URL complétée par ?page=3&index=yy fournit l'index Person souhaité
					$titre = 'Détail Personne';
					break;
	
				case 5 :
					$laPage = "controller/inscription.php";
					$titre = 'Inscription';
					break;
				
				case 6 :
					$laPage = "controller/login.php";
					$titre = 'Login';
					break;
				case 7 :
					$laPage = "controller/supprimerPersonne.php";
					$titre = 'Enlever Personne';
					break;
				case 8 :
					$laPage = "controller/logout.php";
					$titre = '';
					break;
							
		}
	}
	
	//phpinfo();
	include("view/header.php");
    include($laPage);
	include("view/footer.php");
?>
