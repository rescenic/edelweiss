<script>
// Mengecek elemen yang berulang

	function printTwoElements(arr,size)
{
	var i;
		document.write(" Elemen yang berulang adalah ");
			
	for (i = 0; i < size; i++)
	{
		var abs_value = Math.abs(arr[i]);
		if (arr[abs_value - 1] > 0)
			arr[abs_value - 1] = -arr[abs_value - 1];
		else
			document.write( abs_value);
	}
			
	document.write("<br> dan elemen yang hilang adalah ");
	for (i = 0; i < size; i++)
	{
		if (arr[i] > 0)
			document.write (i + 1);
	}
}

//Tes elemen yang berulang
	arr = new Array [9, 31, 38, 5, 62, 44, 38, 17, 19, 38, 50, 74 ];
	n = arr.length;
	printTwoElements(arr, n);
	
</script>