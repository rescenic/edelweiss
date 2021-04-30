<?php

// Fungsi untuk mencari elemen yang berulang
function findRepeating($arr, $n)
{
	$missingElement = 0;

	// indexing based
	for ($i = 0; $i < $n; $i++)
	{

		$element = $arr[abs($arr[$i])];

		if($element < 0)
		{
			$missingElement = $arr[$i];
			break;
		}
	
	$arr[abs($arr[$i])] = -$arr[abs($arr[$i])];
}

return abs($missingElement);

}

// Driver Code
$arr = array (10, 9, 2, 3, 4, 5, 7, 9);

$n = sizeof($arr);

echo findRepeating($arr, $n);

?>
