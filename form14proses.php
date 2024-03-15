<?PHP
 function nilai_terbesar($arr) {
    $max = $_POST['angka'];


    foreach ($arr as $nilai) {
        if ($nilai > $max) {
            $max = $nilai;
        }
    }

    return $max;
}

$angka = [10, 5, 20, 15, 30];

echo "Nilai terbesar: " . nilai_terbesar($angka);