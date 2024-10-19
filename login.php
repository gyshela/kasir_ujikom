<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="style0.css">

	<script src="https://unpkg.com/boxicons@2.1.3/dist/boxicons.js"></script>
</head>

<body class="backimg">
	<div class="redup"></div>
	<div class="window">
		<form class="login" method="POST" action="login_proses.php">
			<box-icon name='coffee-bean' type='solid' size="lg" color='#ffd2b4'></box-icon>
			<h1>COFFEE KITA</h1>
			<input type="text" name="username" placeholder="User Name" autocomplete="off">
			<input type="password" name="password" placeholder="Password" id="myInput">
			<input type="checkbox" onclick="myFunction()"> <label style="color:white;">Show Password</label><br><br>
			<input type="submit" name="login" value="LOGIN"><br>
			<small>Copyright &copy <?= date("Y") ?> By.</small> <a href="">COFFEE KITA</a>
		</form>

	</div>

	</div>
	<script>
		function myFunction() {
			var x = document.getElementById("myInput");
			if (x.type === "password") {
				x.type = "text";
			} else {
				x.type = "password";
			}
		}
	</script>
</body>

</html>