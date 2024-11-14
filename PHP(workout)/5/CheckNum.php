<?php
	$number=(int)$_POST['number'];
	if($number == 0){
		echo "$number is zero";
	}
	elseif($number > 0){
		echo "$number is Positive number";
	}
	else{
		echo "$number is Negative number";
	}
?>
