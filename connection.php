<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<body>
<?php 
$host = 'localhost' ; 
$user = 'root' ; 
$pass = '';
$dbname = 'ap_kasir1';
$connect=mysql_connect($host,$user,$pass) or die ( mysql_error());
$dbselect = mysql_select_db($dbname);
?>
</body>
</html>