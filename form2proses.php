<?php
// mengecek apakah sutau bilangan genap atau ganjil
$angka = $_POST['angka'];


if ($angka % 2 == 0) {
    echo "Angka genap";
} else { 
    echo "Angka ganjil";
 }