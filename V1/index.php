<?php
//define("ROOT", dirname(__DIR__)); // require ROOT.'/';
const ROOT = __DIR__.'/src/View/';

if (isset($_GET['page'])) {	// l'URL complétée par ?page=x fournit le nom de page souhaité
	$page = $_GET['page'];
} else {
	$page = 'Accueil';
}

if ($page === 'Accueil') {
	require_once ROOT."AccueilView.php";
} elseif ($page === 'SigninSoignant') {
	//* View / Authentification
	require_once ROOT."auth/SigninSoignantView.php";
} elseif ($page === 'SigninPatient') {
	require_once ROOT."auth/SigninPatientView.php";
} elseif ($page === 'LoginSoignant') {
	require_once ROOT."auth/LoginSoignantView.php";
} elseif ($page === 'LoginPatient') {
	require_once ROOT."auth/LoginPatientView.php";
} elseif ($page === 'Forgot') {
	require_once ROOT."auth/ForgotPasswordView.php";
} elseif ($page === 'Admin') {
	//* View
	require_once ROOT."AdminView.php";
} elseif ($page === 'User') {
	require_once ROOT."UserView.php";
} elseif ($page === 'Jeux') {
	require_once ROOT."JeuxView.php";
} elseif ($page === 'Logout') {
	require_once ROOT . "auth/LogoutView.php";
} else {
	require_once ROOT."404View.php";
}

// $content = ob_get_clean();
//phpinfo();
