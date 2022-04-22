<?php
include_once('./model/DatabaseModel.php');
include_once('./model/ScoreClass.php');


if (isset($_GET["var1"]) && isset($_GET["var2"])&& isset($_GET["var3"])) {
    $SCORE = $_GET["var1"];
    $SESSIONPAT=$_GET["var2"];
    $DATE = $_GET["var3"];
    $DATE2 = $_GET["var4"];
    $managerpat = new manageScore();
    $managerpat->add_score($SCORE,$SESSIONPAT,$DATE,$DATE2); 
    include_once('View/jeux.php');
}
else{
    include_once('View/jeux.php');

}
?>


