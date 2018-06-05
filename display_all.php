<?php
$db_host = 'localhost'; // Server Name
$db_user = 'stude120_admin'; // Username
$db_pass = 'admin'; // Password
$db_name = 'stude120_References'; // Database Name

$connection = mysqli_connect($db_host, $db_user, $db_pass, $db_name);



if(mysqli_connect_errno()){
    die("connection failed: "
        . mysqli_connect_error()
        . " (" . mysqli_connect_errno()
        . ")");
}



$sql = ("SELECT * FROM Refinal");
		
$query = mysqli_query($connection, $sql);

if (!$query) {
	die ('SQL Error: ' . mysqli_error($connection));
}
?>
<html>
<head>
	<title>Displaying MySQL Data in HTML Table</title>
	<style type="text/css">
		body {
			font-size: 15px;
			color: #343d44;
			font-family: "segoe-ui", "open-sans", tahoma, arial;
			padding: 0;
			margin: 0;
		}
		table {
			margin: auto;
			font-family: "Lucida Sans Unicode", "Lucida Grande", "Segoe Ui";
			font-size: 12px;
		}

		h1 {
			margin: 25px auto 0;
			text-align: center;
			text-transform: uppercase;
			font-size: 17px;
		}

		table td {
			transition: all .5s;
		}
		
		/* Table */
		.data-table {
			border-collapse: collapse;
			font-size: 12px;
			min-width: 300px;
		}

		.data-table th, 
		.data-table td {
			border: 1px solid #e1edff;
			padding: 7px 17px;
		}
		.data-table caption {
			margin: 7px;
		}

		/* Table Header */
		.data-table thead th {
			background-color: #832e75;
			color: #FFFFFF;
			border-color: #6ea1cc !important;
			text-transform: uppercase;
		}

		/* Table Body */
		.data-table tbody td {
			color: #353535;
		}
		.data-table tbody td:first-child,
		.data-table tbody td:nth-child(4),
		.data-table tbody td:last-child {
			text-align: center;
		}

		.data-table tbody tr:nth-child(odd) td {
			background-color: #f4fbff;
		}
		.data-table tbody tr:hover td {
			background-color: #ffffa2;
			border-color: #ffff0f;
		}

		/* Table Footer */
		.data-table tfoot th {
			background-color: #e5f5ff;
			text-align: left;
		}
		.data-table tfoot th:first-child {
			text-align: left;
		}
		.data-table tbody td:empty
		{
			background-color: #ffcccc;
		}
	</style>
</head>
<body>
	<h1>Personalized References</h1>
	<table class="data-table">
	
		<thead>
			<tr>
				<th>Doc ID</th>
				<th>Type</th>
				<th>Author1</th>
				<th>Author2</th>
				<th>Author3</th>
				<th>Title</th>
				<th>ISBN</th>
				<th>Pages</th>
				<th>DOI</th>
				<th>Publisher</th>
				<th>Keywords</th>
				<th>Date</th>
				<th>Category</th>
			</tr>
		</thead>
		<tbody>
		<?php
		$no 	= 1;
		$total 	= 0;
		while ($row = mysqli_fetch_array($query))
		{
			
			echo '<tr>
		        	<td>'.$row['ID'].'</td>
					<td>'.$row['Type'].'</td>
					<td>'.$row['Author1'].'</td>
					<td>'.$row['Author2'].'</td>
					<td>'.$row['Author3'].'</td>
					<td>'.$row['Title'].'</td>
					<td>'.$row['ISBN'].'</td>
					<td>'.$row['Pages'].'</td>
					<td>'.$row['Doi'].'</td>
					<td>'.$row['Publisher'].'</td>
					<td>'.$row['Keywords'].'</td>
					<td>'.$row['Date'].'</td>
					<td>'.$row['Category'].'</td>
				</tr>';
		}?>
		</tbody>
		<tfoot>
		
		</tfoot>
	</table>
</body>
</html>