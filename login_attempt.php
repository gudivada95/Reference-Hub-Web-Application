<?php
$db_host = 'localhost'; // Server Name
$db_user = 'stude120_admin'; // Username
$db_pass = 'admin'; // Password
$db_name = 'stude120_dbmsLogin'; // Database Name

$connection = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

$inputEmail = $connection->real_escape_string($_POST['inputEmail']);
$inputPass = $connection->real_escape_string($_POST['inputPass']);



if(mysqli_connect_errno()){
    die("connection failed: "
        . mysqli_connect_error()
        . " (" . mysqli_connect_errno()
        . ")");
}



$sql = ("SELECT firstName, lastName FROM User WHERE email = '$inputEmail' AND password = '$inputPass'LIMIT 1");
		
$query = mysqli_query($connection, $sql);

if (mysqli_num_rows($query)<1) {
	die ('Incorrect combination of username and password. Please retry  <a href="http://studentrecruiter.x10host.com/root/dbms/login.php"> <button>retry login </button></a> or sign up to use our service  <a href="sign_up.html"> <button>Sign Up!</button></a>' . mysqli_error($connection));
}
?>
<html>

<body style="background-color:#C14227  ;">
	<h1>Welcome!</h1>
	<table class="data-table">
	
		<thead>
			<tr>
				<th></th>
				<th></th>
			</tr>
		</thead>
		<tbody>
		<?php
		$no 	= 1;
		$total 	= 0;
		while ($row = mysqli_fetch_array($query))
		{
			
			echo '<tr>
					<td>'.$row['firstName'].'</td>
					<td>'.$row['lastName'].'</td>
                    <td> Please go here: <a href="Action_select.html"> <button>proceed</button> </a> </td>
				</tr>';
		}?>
		</tbody>
		<tfoot>
		
		</tfoot>
	</table>
</body>
</html>