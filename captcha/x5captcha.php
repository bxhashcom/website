<?php
include("../res/x5engine.php");
$nameList = array("rwx","3pr","aet","kx5","7a7","yjr","h4r","rlm","eck","jc6");
$charList = array("4","U","L","4","X","T","A","P","K","F");
$cpt = new X5Captcha($nameList, $charList);
//Check Captcha
if ($_GET["action"] == "check")
	echo $cpt->check($_GET["code"], $_GET["ans"]);
//Show Captcha chars
else if ($_GET["action"] == "show")
	echo $cpt->show($_GET['code']);
// End of file x5captcha.php
