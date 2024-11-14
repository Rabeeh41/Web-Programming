<?php
	$number=(int)$_POST['number'];
	if($number < 0){
		echo "Invalid Input!!";
	}
	else{
		$fact=1;
		for($i=1;$i <= $number;$i++){	
			$fact=$fact * $i;
		}
		echo "The Factorial of $number is $fact";
	}
?>
