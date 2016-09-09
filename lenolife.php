<?php

function onlyTheBest(array $adata){
	$title = "";

	foreach($adata as $value){
		if(strlen($value) > strlen($title)){
			$title = $value;
		}
	}
	echo strtoupper($title)."<br><br>";

}

$tab0 = array('Goodbye', 'Dennis');
onlyTheBest($tab0);
$tab1 = array('U', 'DUN', 'GOOFED');
onlyTheBest($tab1);
$tab2 = array('name'=>'Glenn','first_name'=>'kenny','pets'=>'dusty','crime'=>'animal abuse','achievement'=>'goofed');
onlyTheBest($tab2);
$tab3 = array('bananas', 'apple','fish'=>'sharktopus', 'lemon', 'pineapple', 'pear', 'cherry');
onlyTheBest($tab3);
$tab4 = array('x-men', 'spiderman','great sayaman','iron man','superman', 'batman','wolverine', 'hulk');
onlyTheBest($tab4);