<?php
$dbLocation = "localhost";
$dbUsername = "root";
$dbPassword = "root";
$dbName = "testdb";
$dbPort = 8889;

$conn = new mysqli($dbLocation, $dbUsername, $dbPassword, $dbName, $dbPort);

if ($conn->connect_error) {
  printf("Database connection failed",
  mysqli_connect_error());
  exit(0);
}

$first_name = $_POST['first-name'];
$last_name = $_POST['last-name'];
$phone_number = $_POST['phone-number'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

// Insert contact info into the database
$sql = "INSERT INTO Contacts (firstname, lastname, phonenumber, email, subject, message)
VALUES ('$first_name', '$last_name', '$phone_number', '$email', '$subject', '$message')";

if ($conn->query($sql) === true) {
echo "Sucessfully sent message!";
} else {
echo "Error sending message";
}


$conn->close();
?>