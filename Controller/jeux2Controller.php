<?php
include_once('./model/DatabaseModel.php');
include_once('./model/PatientClass.php');
include_once('./model/ScoreClass.php');


if (isset($_GET["var1"]) && isset($_GET["var2"])&& isset($_GET["var3"])) {
    $SCORE = $_GET["var1"];
    $SESSIONPAT=$_GET["var2"];
    $TIME = $_GET["var3"];
    $DATE = $_GET["var4"];
    $LEVEL = 2;
    $managerpat = new manageScore();
    $managerpat->add_score($SCORE,$SESSIONPAT,$DATE,$TIME, $LEVEL);
    $index=$SESSIONPAT;
    include_once('View/jeux2.php');

}elseif (isset($_GET['index'])) {		// l'URL complétée par ?page=3&index=yy fournit l'index Person souhaité
    $index = htmlEntities($_GET['index']);
    include_once('View/jeux2.php');
 
}else{
    include_once('View/jeux2.php');

}
?>

