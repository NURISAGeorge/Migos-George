
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
form {
  border: 3px solid #f1f1f1;
}
 input[type=text], input[type=password] {
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
.cancelbtn {
  width: auto;
  padding: 10px 18px;
   background-color: #f44336;
}
.container {
   padding: 16px;
}
 span.psw {
  float: right;
  padding-top: 16px;
}
 @media screen and (max-width: 300px) {
  span.psw {
    display: block;
    float: none;
  }
  .cancelbtn {
     width: 100%;
  }
} 
	</style>
</head>
<body>
 <h1 style="background-color: rgb(255,255,255); text-align: center;"><i><b>LOGIN FORM</b></i></h1>

<form  method="post">
   <fieldset>
     <legend style="background-color: rgb(255,0,255);">login Form</legend>
   
  </div>
  <div class="container">
    <label for="uname"><b style="background-color: #99ffff; color: rgb(0,255,0);">Username</b></label>
    <input type="text" placeholder="Enter Username" name="uname" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>

    <button type="submit">Login</button>
    <label>
      <input type="checkbox" checked="checked" name="remember"> <b style="background-color: rgb(0,192,0); color: #FFFCCC">Remember me
    </label>
  </div>

  <div class="container" style="background-color:rgb(0,255,255);">
    <button type="button" class="cancelbtn">Cancel</button>
    <span class="psw">Forgot <a href="MURISA.php"><b style="background-color: #f1f1f1">password</a></span>
  </div>
  <div id="footer">
    <footer style="background-color: rgb(192,192,192); text-align:center; color: rgb(192,0,192);">&copy;MURISA George</footer>
  </div>
  </fieldset>
</form>
<?php
if (isset('$_POST'["SAVE"])) {
$a=$_POST['']
  # code...
}

?> 
</body>
</html>