<?php
require 'connectionRef.php';
$conn    = Connect();
$DID = $conn->real_escape_string($_POST['DID']);




$query   = ("DELETE  FROM Refinal WHERE ID = '$DID'");

$success = $conn->query($query);
if (!$success) {
    die("Couldn't enter data: ".$conn->error);
}
echo "Thank You!";


$conn->close();
?>

<html lang="en">

<head>
    <body style="background-color:powderblue;">
      <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>ECU Student Recruiter</title>
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN"
    crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.css" />
  <link rel="stylesheet" href="style.css">
    <a href="http://studentrecruiter.x10host.com/root/dbms/Action_select.html">Back to Home Page:</a>

    </head>
        </html>
    </head>