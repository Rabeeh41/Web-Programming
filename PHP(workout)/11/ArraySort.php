<?php
	$numbers = $_POST['Array'];
	$array = explode(',', $numbers);
	foreach ($array as $key => $value) {
		$array[$key] = (int)trim($value);
	}
	
	for ($i = 0; $i < count($array); $i++) {
		for ($j = $i + 1; $j < count($array); $j++) {
			if ($array[$i] < $array[$j]) {
				$temp = $array[$i];
				$array[$i] = $array[$j];
				$array[$j] = $temp;
			}
		}
	}
	echo "Array: ";
	echo implode(',', $array);
?>

