<?php
	$number=(int)$_POST['number'];
	$orgnumber=$number;
	$sum=0;
	$digits=strlen((string)$number);
	while($number>0){
		$digit=$number % 10;
		$sum += pow($digit,$digits);
		$number=(int)($number / 10 );
	}
	if($sum == $orgnumber){
		echo "$orgnumber is an Amstrong number.";
	}
	else{
		echo "$orgnumber is not an Amstrong number.";
	}
?>
