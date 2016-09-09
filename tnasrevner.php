<?php

function my_array_flip(array $params){
	$mirror = [];
	foreach($params as $index=>$value){
		$mirror[$value] = $index;
	}
	return $mirror;

}
function my_array_print(array $tab){
	foreach($tab as $index=>$value){
		echo $index."=>".$value.'<br>';
	}
}

$tab0 = array('Goodbye', 'Dennis');
$tab_mirror = my_array_flip($tab0);
my_array_print($tab_mirror);

$tab1 = array('U', 'DUN', 'GOOFED');
my_array_flip($tab1);
$tab_mirror = my_array_print($tab_mirror);

$tab2 = array('name'=>'Glenn','first_name'=>'kenny','pets'=>'dusty','crime'=>'animal abuse','achievement'=>'goofed');
$tab_mirror = my_array_flip($tab2);
my_array_print($tab_mirror);

$tab3 = array('bananas', 'apple','fish'=>'sharktopus', 'lemon', 'pineapple', 'pear', 'cherry');
$tab_mirror = my_array_flip($tab3);
my_array_print($tab_mirror);

$tab4 = array('x-men', 'spiderman','great sayaman','iron man','superman', 'batman','wolverine', 'hulk');
$tab_mirror = my_array_flip($tab4);
my_array_print($tab_mirror);