<html>
<head>
<title>Login</title>

<link rel="stylesheet" href="login3.css"/>

<script src="login3.js"></script>
</head>
<?phpecho $reslt;
?>
<body style="background-image: url(student1.jpg);">
<div class="container">
<div class="main">
<h2>Login</h2><br>
<form id="form_id" method="post" name="myform">
<label>User Name :</label>
<input type="text" name="username" id="username"/>
<label>Password :</label>
<input type="password" name="password" id="password"/>
<input type="button" value="Login" id="submit" onclick="validate()"/>

</form>

</div>

</div>
</body>
</html>