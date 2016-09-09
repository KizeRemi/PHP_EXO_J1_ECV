<?php

function oddOrEvent($var){
	if ($var % 2 == 0){
		echo "Even";
	}
	else{
		echo "Odd";
	}
}

//Affiche une erreur si le parametre "data" n'existe pas
oddOrEvent($_GET["data"]);