<?php
//define("ROOT", dirname(__DIR__)); // require ROOT.'/';
//PAGE PAR DEFAUT

if (isset($_GET['page'])) {		// l'URL complétée par ?page=x fournit le nom de page souhaité
	$page = $_GET['page'];
} else {
	$page = 'Acceuil';
}

if ($page === 'Acceuil') {
	require "./../src/View/AccueilView.php";
} elseif ($page === 'SigninSoignant') {
	require "./../src/View/auth/SigninSoignantView.php";
} elseif ($page === 'SigninPatient') {
	require "./../src/View/auth/SigninPatientView.php";
} elseif ($page === 'LoginSoignant') {
	require "./../src/View/auth/LoginSoignantView.php.php";
} elseif ($page === 'LoginPatient') {
	require "./../src/View/auth/LoginPatientView.php";
} elseif ($page === 'Forgot') {
	require "./../src/View/auth/ForgotPasswordView.php";
} elseif ($page === 'Admin') {
	require "./../src/View/AdminView.php";
} elseif ($page === 'User') {
	require "./../src/View/UserView.php";
} elseif ($page === 'Jeux') {
	require "./../src/View/JeuxView.php";
} elseif ($page === 'Logout') {
	require "./../src/View/AccueilView.php";
} else{
	require "./../src/View/404View.php";
}
// $content = ob_get_clean();

//phpinfo();
// require("./src/View/Template.php");


// include($laPage);
//
// $laPage = './src/View/JeuxView.php';
// $titre = "Accueil";
// if (isset($_GET['page'])) {		// l'URL complétée par ?page=x fournit le nom de page souhaité
// 	$page = $_GET['page'];
// 	//système qui permet de savoir la page à charger
// 	switch ($page) {
// 		case 1:
// 			$laPage = 'controller/personnes.php';
// 			$titre = 'Personnes';
// 			// require './src/View/JeuxView.php';
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