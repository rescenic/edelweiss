<script>
//Cek elemen yang berulang

	function mostFrequent(arr, n)
	{
		
		// Sortir array
		arr.sort();
		
		// Cari frekuensi maks menggunakan linear traversal
		let max_count = 1, res = arr[0];
		let curr_count = 1;
		
		for (let i = 1; i < n; i++)
		{
			if (arr[i] == arr[i - 1])
				curr_count++;
			else
			{
				if (curr_count > max_count)
				{
					max_count = curr_count;
					res = arr[i - 1];
				}
				curr_count = 1;
			}
		}
	
		// Cek jika elemen terakhir itu paling sering
		if (curr_count > max_count)
		{
			max_count = curr_count;
			res = arr[n - 1];
		}
		return res;
	}
	
// Tes fungsi cek elemen berulang

		let arr = [9, 31, 38, 5, 62, 44, 38, 17, 19, 38, 50, 74];
		let n = arr.length;
		document.write(mostFrequent(arr,n));

</script>
