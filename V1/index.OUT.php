<?php
//define("ROOT", dirname(__DIR__)); // require ROOT.'/';
// const ROOT = __DIR__.'/src/View/';
const ROOT = './src/View/';
//var_dump(ROOT);

if (isset($_GET['page'])) {	// l'URL complétée par ?page=x fournit le nom de page souhaité
	$page = $_GET['page'];
} else {
	$page = "Accueil";
}

if ($page === "Accueil") {
	$Contenu = ROOT."AccueilView.php";
	//require_once $Contenu;
} elseif ($page === 'SigninSoignant') {
	//* View / Authentification
	$Contenu = ROOT."auth/SigninSoignantView.php";
} elseif ($page === 'SigninPatient') {
	$Contenu = ROOT."auth/SigninPatientView.php";
} elseif ($page === 'LoginSoignant') {
	$Contenu = ROOT."auth/LoginSoignantView.php";
} elseif ($page === 'LoginPatient') {
	$Contenu = ROOT."auth/LoginPatientView.php";
} elseif ($page === 'Forgot') {
	$Contenu = ROOT."auth/ForgotPasswordView.php";
} elseif ($page === 'Admin') {
	//* View
	$Contenu = ROOT."AdminView.php";
} elseif ($page === 'User') {
	$Contenu = ROOT."UserView.php";
} elseif ($page === 'Jeux') {
	$Contenu = ROOT."JeuxView.php";
} elseif ($page === 'Logout') {
	$Contenu = ROOT."auth/LogoutView.php";
} else {
	$Contenu = ROOT."404View.php";
}

// $content = ob_get_clean();
//phpinfo();
require_once $Contenu;