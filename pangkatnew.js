<script>
// Fungsi untuk mengecek apakah
// x adalah hasil pangkat 2 
	function cekPangkatDua(n)
	{
		if (n == 0)
			return false;

		return parseInt( (Math.ceil((Math.log(n) / Math.log(2))))) == parseInt( (Math.floor(((Math.log(n) / Math.log(2))))));
	}

// Test fungsi cekPangkatDua
	document.write("Apakah 4 merupakan hasil dari pangkat 2? <br/>")
	if (cekPangkatDua(4))
		document.write("1 (betul)<br/>");
	else
		document.write("0 (salah)<br/>");
    
    document.write("Apakah 128 merupakan hasil dari pangkat 2? <br/>")
	if (cekPangkatDua(128))
        document.write("1 (betul)<br/>");
	else
        document.write("0 (salah)<br/>");
    
    document.write("Apakah 5 merupakan hasil dari pangkat 2? <br/>")
    if (cekPangkatDua(5))
        document.write("1 (betul)<br/>");
	else
        document.write("0 (salah)<br/>");

</script>
