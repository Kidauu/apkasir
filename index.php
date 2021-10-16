<html>
<html>
<head>
<title>LOGIN</title>
<body background="icon/bg1.jpg" width="600" height="600">  
</head>
<body>
<h1><center>LOGIN</center></h1>
<br>
<br>
<form method = 'POST' action = 'login1.php'>
 <table border = '1' align='center' cellspacing = '1' cellpadding = '10'
 style = 'border : #aaa; color: #101; font-family : arial; fot-size : 14px;'>
 
 <tr>
  <td> username</td>
  <td align = 'center'> : </td>
  <td> <input type = 'text' name = 'username' /> </td>
  </tr>
   <tr>
  <td> password</td>
  <td align = 'center'> : </td>
  <td> <input type = 'password'  name = 'password' /> </td>
  </tr>
 <tr>
		<td>Type User</td><td> :</td>

		<td><select name="namalevel">
		<option value="">Silahkan Pilih</option>
		<option value="1">Administator</option>
		<option value="2">waiter</option>
		<option value="3">kasir</option>
		<option value="4">owner</option>
		<option value="5">pelanggan</option>
		</select>
		</td>
	</tr>
  <tr>
   <td>  </td>
  <td width = '5' align = 'center'> : </td>
  <td> <input type ='submit' name = 'login'  value='login'> </td>
  </tr>
  
  <br>
  </form>
  </body>
  </html>