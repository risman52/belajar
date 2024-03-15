<?php
// string merupakan palidrom atau tidak

$kata = $_POST['angka'];
if (strrev($kata) == $kata) {
    echo "Palidrom";
} else {
    echo "Bukan palodrom";
}        