<?php
$servername = "localhost";
$user = "root";
$password = "";
$db = "ap_kasir1";

$koneksi = mysqli_connect($servername,$user,$password,$db);

if (mysqli_connect_errno()){
echo 'Gagal melakukan koneksi ke Database : ' .mysqli_connect_error();}
else{

}	
			
?>
