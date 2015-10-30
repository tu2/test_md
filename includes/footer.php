<!--footer-->

<p>&copy;
<?php
$startY = 2001;
$nowY = date('Y');
if($startY == $nowY){
	echo $startY;
}else{
	echo "{$startY}&ndash;{$nowY}";
}

?> 
 tu2</p>
</body>
</html>
