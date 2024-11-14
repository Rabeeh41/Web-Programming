<?php
	function isprime($num){
		if ($num<2){
			return False;
		}
		for($i=2;$i<=sqrt($num);$i++){
			if($num % $i == 0){
				return False;
			}
		}
		return True;
	}
	function sumprime($N){
		$sum=0;
		for($i=2;$i<$N;$i++){
			if(isprime($i)){
				$sum+=$i;
			}
		}
		return $sum;
	}
	$N=(int)$_POST['number'];
	echo "Sum of all prime numbers less than $N is:".sumprime($N);
?>
	
