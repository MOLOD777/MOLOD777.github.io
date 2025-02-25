<?php
$firstNumber=$_GET["firstNumber"];
$action=$_GET["action"];
$secondNumber=$_GET["secondNumber"];
if ($_GET["action"] == "+"){
	echo $_GET["firstNumber"]+$_GET["secondNumber"];
} else if ($action=="-"){
	echo $firstNumber-$secondNumber;
} else if ($action=="*"){
	echo $firstNumber*$secondNumber;
} else if ($action=="/"){
	echo $firstNumber/$secondNumber;
?>