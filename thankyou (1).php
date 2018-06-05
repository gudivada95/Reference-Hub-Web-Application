<?php
require 'connectionRef.php';
$conn    = Connect();
$Type = $conn->real_escape_string($_POST['Type']);
$Author1 = $conn->real_escape_string($_POST['Author1']);
$Author2 = $conn->real_escape_string($_POST['Author2']);
$Author3 = $conn->real_escape_string($_POST['Author3']);
$Title = $conn->real_escape_string($_POST['Title']);
$ISBN = $conn->real_escape_string($_POST['ISBN']);
$Pages = $conn->real_escape_string($_POST['Pages']);
$Doi = $conn->real_escape_string($_POST['Doi']);
$Publisher = $conn->real_escape_string($_POST['Publisher']);
$Keywords = $conn->real_escape_string($_POST['Keywords']);
$Date = $conn->real_escape_string($_POST['Date']);
$Category = $conn->real_escape_string($_POST['Category']);






$query   = "INSERT into Refinal (Type,Author1,Author2,Author3,Title,ISBN,Pages,Doi,Publisher,Keywords,Date,Category) VALUES('" . $Type . "','" . $Author1 . "','" . $Author2 . "','" . $Author3 . "','" . $Title . "','" . $ISBN . "','" . $Pages . "','" . $Doi . "','" . $Publisher . "','" . $Keywords . "','" . $Date . "','" . $Category . "')";

$success = $conn->query($query);
if (!$success) {
    die("Couldn't enter data: ".$conn->error);
}
echo "Thank You For Submitting Your Reference!";


$conn->close();
?>

<html lang="en">

<head>
      <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>ECU Student Recruiter</title>
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN"
    crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.css" />
  <link rel="stylesheet" href="style.css">
    <a href="http://studentrecruiter.x10host.com/root/dbms/Action_select.html">Back to Login Page:</a>

    </head>
        </html>
    </head>