<!DOCTYPE html>

<html>
<style>
<head>
<!/*  Style Format for Navigation Buttons  */>
a	{
	text-decoration: none;
	display: inline-block;
	padding; 8px 24px;
}

a:hover	{
	background-color: #ddd;
	color: black;
}

.previous	{
	background-color: green;
	font-size: 18pt;
	color: black:
}

.button {
	background-color: gray;
	border: none;
	color: black;
	padding: 20px;
	text-align: center;
	text-decoration: none;
	display: inline-block;
	display: inline-block;
	font-size:  20px;
	margin:  4px 2px;
	cursor:  pointer;
	border-radius:  36px;

}

</style>
</head>
<body>

<!/*   Image on User Page */>
<img src="wc.jpg" width="100%" height="20%">

<form action="login_attempt.php" method="POST"

<p><h1><center>Please type in your personal information to access your schedule.</center></h1></p>

<p>
Email Address: <input type="text" name="inputEmail"required><br></p>

<p>
Password: <input type="password" name="inputPass"required><br></p>


<p>
<input type="submit"></p>

</form>
</body>
</html>