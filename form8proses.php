<?php
// menggunakan loop while
$num = $_POST['angka'];

while ($num <= 10) {
    echo $num . " ";
    $num += 2;
}    