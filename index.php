<?php 
/*
* This is just a test page
*
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


echo "<h2>Select a colour</h2>\n";
?>

<?php

// create a checkbox form using post	
if (!isset($_POST['submit'])){
	
?>
	
	<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
		Select as many as you like:<br />
		<input type="checkbox" name="colours[]" value="Blue">Blue
		<input type="checkbox" name="colours[]" value="Red">Red
		<input type="checkbox" name="colours[]" value="Green">Green
		<input type="checkbox" name="colours[]" value="Purple">Purple
		<input type="submit" name="submit" value="Select">
	</form>	
	
<?php

}
else{
	
	if(!isset($_POST['colours'])){
		echo 'Nothing selected';
		
	}
	else{
		echo 'You selected: <br />';
		foreach($_POST['colours'] as $a){
			echo "<i>$a</i><br />";
		}
	}
	
}
?>

<?php
	
// page footer
include ('includes/footer.php');

?>