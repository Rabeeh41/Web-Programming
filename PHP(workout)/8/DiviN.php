<?php
	$number=(int)$_POST['number'];
	$N=(int)$_POST['N'];
	$div=$number % $N;
	if($div == 0){
		echo "$number is divisible by $N";
	}
	else{
		echo "$number is not divisible by $N";
	}
?>

