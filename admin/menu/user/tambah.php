<?php 
include "../../../config/koneksi.php";
session_start();

$username = $_POST['username'];
$nama = $_POST['nama'];
$pass = md5($_POST['password']);

$query = mysqli_query($koneksi,"INSERT INTO user SET nama='$nama',username='$username',password='$pass'");
if($query){
    echo "Data berhasil disimpan!";
    echo "<meta http-equiv='refresh' content='1; url=../../dashboard.php?hal=user'>";
 }else{
    echo "Tidak dapat menyimpan data!<br>";
 }

?>