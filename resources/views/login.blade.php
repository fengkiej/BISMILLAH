<html>
<head>
	<title>Login</title>
	<link href="/css/style2.css" rel='stylesheet' type='text/css' />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link href='//fonts.googleapis.com/css?family=Open+Sans:300,400,400italic,600,600italic,700,300italic' rel='stylesheet' type='text/css'>
	<style>
		h1 {
			color: #000;
		}
	</style>
</head>
<body>
<center>
	<h1>Login</h1>
	<div class="login-top left">
		<form action="{{ url('/login') }}" method="post">
			{{ csrf_field() }}
			<input type="text" name="email" class="email" placeholder="Your Email" required>
			<input type="password" name="password" class="password" placeholder="Password" required>											
			<input type="submit" value="LOG IN">
		</form>
	</div>
	</center>
</body>
</html>
