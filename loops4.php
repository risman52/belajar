<?php
 // Menghitung volume silinder
  function hitung VolumeSilinder($radius, $tinggi) {
     $volume = M_PI $radius $radius * $tinggi; return $volume;
   }
    // Contoh penggunaan
     $radius = 3;
     $tinggi = 8;
    $volume = hitung VolumeSilinder($radius, $tinggi);
      echo "Volume silinder dengan radius $radius dan tinggi $tinggi adalah
     ?>