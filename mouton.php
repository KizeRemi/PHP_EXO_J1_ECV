<?php

function my_sheep(array $sheeps){
	$i=0;
	foreach($sheeps as $sheep){
		$i++;
	}
	echo $i."<br>";
}

$tab0 = array('Goodbye', 'Dennis');
my_sheep($tab0);
$tab1 = array('U', 'DUN', 'GOOFED');
my_sheep($tab1);
$tab2 = array('name'=>'Glenn','first_name'=>'kenny','pets'=>'dusty','crime'=>'animal abuse','achievement'=>'goofed');
my_sheep($tab2);
$tab3 = array('bananas', 'apple','fish'=>'sharktopus', 'lemon', 'pineapple', 'pear', 'cherry');
my_sheep($tab3);
$tab4 = array('x-men', 'spiderman','great sayaman','iron man','superman', 'batman','wolverine', 'hulk');
my_sheep($tab4);