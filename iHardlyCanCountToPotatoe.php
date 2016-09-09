<?php 

// Il faut tester si le parametre number existe
$limit = $_GET["number"];

for($i=0;$i<=$limit;$i++){
	echo $i."<br>";
}