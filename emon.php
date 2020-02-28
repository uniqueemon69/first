<?php 
//echo "Hello world \r\n";
$a =123.12;
$b = array(
	"identity" =>
	array(
		"id" => "154422",
	"name" => "emon",
	"email" => "emon69@gmail.com"
),
	"project" =>
	array(
		"first" => "file compression"



	)
	

);

print_r($b["project"]);
$l=strlen($b["project"]["first"]);
echo $l;
 ?>