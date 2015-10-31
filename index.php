<?php 
/*
* this is just a test page
*/
$title = 'Test';
$desc  = 'This is the main page';
$kw    = 'These are the keywords';
// page header
include('includes/header.php');

// content of the page

echo "<h1> {$title} </h1>";
echo "<p>Today is: ";
echo date('l, F jS Y.');
echo "</p>";

//creating a table

echo "<h2>Index table</h2>\n";

$raw_color = array('#F7D0C3', '#C3EAF7');
$color_index = 0;
$string = array(
	'key1' => 'value1',
	'key2' => 'value2',
	'key3' => 'value3'
	);

print "<table>\n";
foreach ($string as $k => $v){
	print '<tr bgcolor="' . $raw_color[$color_index] . '" >';
	print "<td> $k </td><td> $v </td>\n</tr>\n";
	$color_index = 1 - $color_index;
	
}
print '</table>';
	
// page footer
include ('includes/footer.php');

?>