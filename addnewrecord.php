<?php
$con = new mysqli("localhost", "root", "", "Students");
$name = $_POST["name"];
$email = $_POST["email"];
$mob = $_POST["mob"];
$courses = $_POST["courses"];
if ($con->connect_error) {
die("Connection failed: " . $con->connect_error);
}
$sql = "INSERT INTO Students (Name, email, Mobile_Number, Course) VALUES ('$name',
'$email', '$mob', '$courses')";
if ($con->query($sql) === TRUE) {
echo "New record created successfully";
}
else {
echo "Error: " . $sql . "<br>" . $con->error;
}