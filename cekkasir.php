<?php
session_start();
//cek apakah user sudah login
if(!isset($_SESSION['username'])){
    die("<script>window.alert('Login Terdahulu')
window.location='index.php'</script>");//
}

//cek level user
if($_SESSION['namalevel']!="kasir"){
    die("Anda bukan kasir");
}
?>