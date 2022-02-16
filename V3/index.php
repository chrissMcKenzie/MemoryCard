<?php
//define("ROOT", dirname(__DIR__)); // require ROOT.'/';
//PAGE PAR DEFAUT
$laPage = '.View/AcceuilView.php';
$titre = "Accueil";

if (isset($_GET['page'])) { // l'URL complétée par ?page=x fournit le nom de page souhaité
	$page = $_GET['page'];
	//système qui permet de savoir la page à charger
	switch ($page) {
		case "" or "home" or "Home" or "Acceuil" or "acceuil" or 1:
			$laPage = 'View/AcceuilView.php';
			$titre = 'Acceuil';
			//($page == "" or "home" or "Home" or "Acceuil" or "acceuil" or "signin" or "login") ? require_once './View/AcceuilView.php' : "PAGE VIDE";
			break;

		case "signinsoignant" or "signinSoignant" or "SigninSoignant" or 2:
			$laPage = 'View/auth/SigninSoignantView.php';
			$titre = 'Signin';
			//require_once './View/auth/SigninSoignantView.php';
			break;

		case "signinpatient" or "signinPatient" or "SigninPatient" or 3:
			$laPage = 'View/auth/SigninPatientView.php';
			$titre = 'Signin';
			//require_once './View/auth/SigninPatientView.php';
			break;

		case "loginsoignant" or "loginSoignant" or "LoginSoignant" or 4:
			$laPage = 'View/auth/LoginSoignantView.php';
			$titre = 'Login';
			//require_once './View/auth/LoginSoignantView.php';
			break;

		case "loginpatient" or "loginPatient" or "LoginPatient" or 5:
			$laPage = "View/auth/LoginPatientView.php"; // l'URL complétée par ?page=3&index=yy fournit l'index Person souhaité
			$titre = 'login';
			//require_once './View/auth/LoginPatientView.php';
			break;

		case "password" or "Password" or 6:
			$laPage = "View/auth/ForgotPasswordView.php"; // l'URL complétée par ?page=3&index=yy fournit l'index Person souhaité
			$titre = 'Password';
			//require_once './View/auth/ForgotPasswordView.php';
			break;

		case "admin" or "Admin" or 7:
			$laPage = "View/AdminView.php"; // l'URL complétée par ?page=3&index=yy fournit l'index Person souhaité
			$titre = 'Admin';
			//require_once './View/AdminView.php';
			break;

		case "user" or "User" or 8:
			$laPage = "View/UserView.php"; // l'URL complétée par ?page=3&index=yy fournit l'index Person souhaité
			$titre = 'Admin';
			//require_once './View/UserView.php';
			break;

		case "jeux" or "Jeux" or 9:
			$laPage = "View/JeuxView.php"; // l'URL complétée par ?page=3&index=yy fournit l'index Person souhaité
			$titre = 'jeu';
			//require_once './View/JeuxView.php';
			break;

		case "logout" or "Logout" or 10:
			//$laPage = "Model/logout.php"; // l'URL complétée par ?page=3&index=yy fournit l'index Person souhaité
			$laPage = 'View/AcceuilView.php';
			$titre = 'Acceuil';
			//require_once './View/AcceuilView.php';
			break;


		default:
			$laPage = 'View/AcceuilView.php';
			$titre = 'Acceuil';
			break;
	}
	// include($laPage);
	// print_r($laPage);
}
// else {
// 	$page = "Home";
// }

//phpinfo();
include($laPage);
