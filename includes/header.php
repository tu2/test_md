<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title><?php if ($title){echo $title;}else{$title="test PHP";} ?></title>
	<meta name="robots" content="noindex, nofollow">
	<?php
	// default description
	
	print '<meta name="';
	print 'description" ';
	print 'content="';
	 
	if($desc){
		echo $desc;
	}else{
		$desc = "DESCRIPTION";
		echo $desc;
	} 
	
	print '">';
	
	?> 
	<meta name="keywords" content="<?php echo $kw; ?>" >
	<meta name="author" content=" X. Y. Z.">
</head>
<body>
