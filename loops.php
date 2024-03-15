<?php  
// Menghitung faktorial
 function hitungFaktorial($n) {
     $hasil = 1;
      for ($i = 1; $i <= $n; $i++) {
         $hasil *= $i; } return $hasil;
         } 
         // Contoh penggunaan
          $n = 5; $faktorial = hitungFaktorial($n);
           echo "Faktorial dari $n adalah: $faktorial";
?>  