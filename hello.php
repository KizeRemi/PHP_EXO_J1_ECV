<?php


function my_func() {
	return $var = "Hello World<br>";

}

$param = my_func();

function my_aff($param) {
	echo $param;
}
my_aff($param);

function is_cool($truc){
	if($truc == "cool"){
		echo "Il est cool<br>";
	} else {
		echo "Il n'est pas cool<br>";
	}
}

is_cool("lol");
is_cool("cool");
is_cool("homer");

function countdown($start){
	while($start >= 0){
		echo $start;
		$start--;
	}
}
countdown(42);