<script>
  
// Mengecek elemen terbesar kedua
   
    // Fungsi untuk mencetak elemen terbesar kedua
    function print2largest(inputVector, inputVector_size) {
        let n;
        let largest = second = -2454635434;
   
        // Minimal 2 elemen
        if (inputVector_size < 2) {
            document.write(" Invalid Input ");
            return;
        }
   
        // Mencari elemen terbesar
        for (n = 0;n<inputVector_size;n++){
            if (inputVector[n]>largest){
                largest = inputVector[n];
            }
        }
   
        // Mencari elemen terbesar kedua
        for (n = 0 ;n<inputVector_size;n++){
            if (inputVector[n]>second && inputVector[n]<largest){
                second = inputVector[n];
            }
        }
  
        if (second == -2454635434){
             
        document.write("Tidak ada elemen terbesar kedua<br>");
        }
        else{
            document.write("Elemen terbesar kedua adalah " + second);
                return;
            }
        }
     
   
    // Cek Nilai Terbesar Kedua
  
    let inputVector= [ 0, 12, 17, 3, 1 ];
    let n = inputVector.length;
    print2largest(inputVector, n);
   
</script>