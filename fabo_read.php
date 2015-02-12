<?php

$readin = file("fabo_example.txt");
foreach($readin as $aux){
	$delimiter="\t";
	$data=str_getcsv($aux,$delimiter);
	print_r ($data);
}

?>