<?php
	$marks=(int)$_POST['marks'];
	$tmarks=(int)$_POST['tmarks'];
	$per=$marks / $tmarks * 100;
	if($per >= 60){
		echo "First Division!";
	}
	elseif($per >= 45 && $per <= 59){
		echo "Second Division!";
	}
	elseif($per >= 33 && $per <44){
		echo "Third Division!";
	}
	else{
		echo "Failed!";
	} 
?>
