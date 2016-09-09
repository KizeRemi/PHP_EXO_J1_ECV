<?php

function create_tab(){
	$tab = array('Le Guide du voyageur galactique','Le Dernier Restaurant avant la fin du monde','La Vie, l\'Univers et le Reste','Salut, et encore merci pour le poisson','Globalement inoffensive');
	foreach($tab as $title){
		echo $title.'<br>';
	}
}

create_tab();