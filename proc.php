<?php 

$temporaryFolder = $_FILES['foto']['tmp_name'];
$target_dir = 'upload/';
$target_file = $target_dir . basename($_FILES['foto']['name']);
move_uploaded_file($temporaryFolder, $target_file);

echo 'Halo' . $_POST['nama_lengkap'] . '<br>';
echo 'Alamat kamu :'.$_POST['alamat'].'<br>';
echo '<img width="100px" src="/belajar/upload/'.$_FILES['foto']['name'].'">';