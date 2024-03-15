<?php 
// Data produk dan harga
 $produk = [ 
     'Kaos' => 100000,
     'Celana' => 200000, 
     'Topi' => 50000 
]; 
// Keranjang belanja (produk dan jumlah)
$keranjang = [ 
     'Kaos' => 2, 
     'Celana' => 1,  
     'Topi' => 3 
]; 
// Hitung total belanja
$total = 0; 
foreach ($keranjang as $item => $qty) { 
     if (isset($produk[$item])) { 
          $total += $produk[$item] * $qty;
     }
}  
?>