<?php 


// print random content based on array.
function r($a){
	echo $a[array_rand($a)];
	return;
}

// print random array
function r_list($array, $list_type, $max = false){
	shuffle($array);

	if ( !$max ) {
		$max = count($array);
	}

	$count = 0;
	echo "<$list_type>";
	foreach($array as $key){
		echo "<li>$key</li>";
		$count++;
		if ($count == $max) {
			echo "</$list_type>";
			return;
		}
	}
	echo "</$list_type>";
	return;
}


 ?>