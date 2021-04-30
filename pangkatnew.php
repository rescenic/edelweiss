<?php
// Fungsi untuk mengecek
// x adalah hasil pangkat 2
function cekPangkatDua($n)
{
if ($n == 0)
	return 0;
while ($n != 1)
{
	if ($n % 2 != 0)
		return 0;
	$n = $n / 2;
}
return 1;
}

// Test fungsi cekPangkatDua
if(cekPangkatDua(31))
	echo "Yes\n";
else
	echo "No\n";

if(cekPangkatDua(64))
	echo "Yes\n";
else
	echo "No\n";
?>
