<?php
// Ambil data
$id = $_POST['id'];
$f_name = $_POST['f_name'];
$l_name = $_POST['l_name'];
$email = $_POST['email'];
$email2 = $_POST['email2'];
$profesi = $_POST['profesi'];

// Buat baris untuk di csv
$new_data = "$id,$f_name,$l_name,$email,$email2,$profesi";

// Tambahkan ke file CSV server
file_put_contents('datapribadi.csv', $new_data . PHP_EOL, FILE_APPEND);

// Redirect ke index.php
header('Location: index.php');
exit();
?>
