<?php

function my_array_print(array $tab){
	foreach($tab as $index=>$value){
		echo $index."=>".$value.'<br>';
	}
}

$tab0 = array('Goodbye', 'Dennis');
my_array_print($tab0);
$tab1 = array('U', 'DUN', 'GOOFED');
my_array_print($tab1);
$tab2 = array('name'=>'Glenn','first_name'=>'kenny','pets'=>'dusty','crime'=>'animal abuse','achievement'=>'goofed');
my_array_print($tab2);
$tab3 = array('bananas', 'apple','fish'=>'sharktopus', 'lemon', 'pineapple', 'pear', 'cherry');
my_array_print($tab3);
$tab4 = array('x-men', 'spiderman','great sayaman','iron man','superman', 'batman','wolverine', 'hulk');
my_array_print($tab4);