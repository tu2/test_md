<?php 
$title = 'Hello World';
$desc  = 'This is the index page';
$kw    = 'This are the keywords';
include('includes/header.php');

?>
	
<?php
//test page

echo "<h1> {$title} </h1>";
echo "<p>Today is: ";
echo date('l, F jS Y.');
echo "</p>";

?>



<?php

include ('includes/footer.php');

?>