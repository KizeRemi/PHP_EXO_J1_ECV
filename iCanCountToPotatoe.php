<?php

// Il faut tester si le parametre number existe
$limit = $_GET["number"];
$i = 0;

while($i <= $limit){
	echo $i."<br>";
	$i++;
}