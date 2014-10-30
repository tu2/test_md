<?php 

include('includes/header.php');

?>
	
<?php
//add text

$secret= 98899889;	
$name = array('Name1', 'Name2', 'Name3', 'Name4');

$persons = array(
	'name' => 'Name A',
	'age' => 33,
	'location' => 'Location X'
);

echo 'Number of names in array: ', count($name), "<br>";

foreach ($name as $key => $value){
	echo $key + 1, '. ', $value; 
	if(($key + 1) !== count($name)){
		echo '<br>';
	}
}
echo '<br>';

echo "info about a person", '</br>';
$string='';
foreach($persons as $key => $value){
	$string .= $key . '=' . $value . $secret;
}

print $string;
echo '<pre>', print_r($persons, true), '</pre>';

?>



<?php

include ('includes/footer.php');

?>