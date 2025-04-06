<!DOCTYPE html>
<html>
<head>
	<title></title>
		<style type="text/css">
form {
  border: 3px solid #f1f1f1;
}
 input[type=text], input[type=password],input[type=number] {
  width: 100%;
  padding: 12px 20px;
   margin: 8px 0;
   display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}
button {
  background-color: #04AA6D;
   color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
   width: 100%;
}
button:hover {
  opacity: 0.8;
}
h1{
	background-color: rgb(192,0,192);
	color: rgb(255,0,255);
	text-align: center;	
}

</style>
</head>
<body>
	<h1><b><i>WHEN YOU FORGOT PASSWORD</h1>
<form method="POST">
<fieldset>
	<legend><b><i>CREATE LOGIN FORM</legend>
	<b><i>First Name
	<input type="text" placeholder="Enter  fist name" name="nn" required>
	<b><i>Second Name
	<input type="text" placeholder="Enter Second Name" name="mm" required>
	<b><i>Email
	<input type="text" placeholder="Enter Email" name="EE" required>
	<b><i>Phone Number
	<input type="number" placeholder="Enter Phone Number" name="PP" required><br>
	<b><i>Password
	<input type="password" placeholder="Enter Password" name="p">
	<button type="submit" name="sv">LOGIN</button>
	<a href="george.php"><i>BACK</i></a>

</fieldset>
</form>
</body>
</html>