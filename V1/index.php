<?php
//define("ROOT", dirname(__DIR__)); // require ROOT.'/';
//PAGE PAR DEFAUT

if (isset($_GET['page'])) {		// l'URL complétée par ?page=x fournit le nom de page souhaité
	$page = $_GET['page'];
} else {
	$page = 'home';
}

// ob_start();
if ($page === 'home') {
	require "../Home.php";
} elseif ($page === 'Jeux') {
	require "./View/JeuxView.php";
}
// $content = ob_get_clean();

//phpinfo();
// require("./View/Template.php");


// include($laPage);
//
// $laPage = './View/JeuxView.php';
// $titre = "Accueil";
// if (isset($_GET['page'])) {		// l'URL complétée par ?page=x fournit le nom de page souhaité
// 	$page = $_GET['page'];
// 	//système qui permet de savoir la page à charger
// 	switch ($page) {
// 		case 1:
// 			$laPage = 'controller/personnes.php';
// 			$titre = 'Personnes';
// 			// require './View/JeuxView.php';
// 			break;

// 		case 2:
// 			$laPage = 'controller/films.php';
// 			$titre = 'Films';
// 			break;

// 		case 3:
// 			$laPage = "controller/detailPersonne.php"; // l'URL complétée par ?page=3&index=yy fournit l'index Person souhaité
// 			$titre = 'Détail Personne';

// 			break;
// 	}
// }