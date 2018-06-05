<?php
require 'connection.php';
$conn    = Connect();
$firstName = $conn->real_escape_string($_POST['firstName']);
$lastName = $conn->real_escape_string($_POST['lastName']);
$email = $conn->real_escape_string($_POST['email']);
$password = $conn->real_escape_string($_POST['password']);


$query   = "INSERT into User (firstName,lastName,email,password) VALUES('" . $firstName . "','" . $lastName . "','" . $email . "','" . $password . "')";

$success = $conn->query($query);
if (!$success) {
    die("Couldn't enter data: ".$conn->error);
}
echo "Thank You For Submitting Your Information! ";


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
    <a href="http://studentrecruiter.x10host.com/root/dbms/user_selection.html">Please proceed to the member page</a>
</body>
    </head>
        </html>
    </head>