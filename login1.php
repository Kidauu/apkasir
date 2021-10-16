<?php

$error=''; 

include "config.php";
{				
	$username	= $_POST['username'];
	$password	= $_POST['password'];
	$hak	= $_POST['namalevel'];

					
	$query = mysqli_query($koneksi, "SELECT * FROM login WHERE username='$username' AND password='$password' ");
	if(mysqli_num_rows($query) == 0)
	{
		echo "<script>window.alert('Data salah')
window.location='logout.php'</script>";
		//echo "<script><a href='logout.php'>window.alert('Data yang anda masukan salah')
    //window.location='index.php'</script></a>";
	}
	else
	{
		session_start();
		$row = mysqli_fetch_assoc($query);
		$_SESSION['username']=$row['username'];
		$_SESSION['password']=$row['password'];
		$_SESSION['namalevel'] = $row['namalevel'];
		$_SESSION['iduser'] = $row['iduser'];
		
		if($row['namalevel'] == "administrator" && $hak=="1")
		{
			
			echo "<script>window.location='homeadmin.php'</script>";
		}
		else if($row['namalevel'] == "waiter" && $hak=="2")
		{
			
			echo "<script>window.location='homewaiter.php'</script>";
		}
		else if($row['namalevel'] == "kasir" && $hak=="3")
		{
			
			echo "<script>window.location='homekasir.php'</script>";
		}
		else if($row['namalevel'] == "owner" && $hak=="4")
		{
			
			echo "<script>window.location='homeowner.php'</script>";
		}
		else if($row['namalevel'] == "pelanggan" && $hak=="5")
		{
			
			echo "<script>window.location='homepelanggan.php'</script>";
		}
		else
		{
			echo "<script>window.alert('Data salah')
window.location='logout.php'</script>";
			//echo "<script>window.alert('Data yang anda masukan salah')
    //window.location='index.php'</script>";
		}
	}
}	
?>
