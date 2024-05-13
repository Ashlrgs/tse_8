<?php
$con = new mysqli("localhost", "root", "", "Students");
if($con->connect_error){
die("Connection failed: " . $con->connect_error);
}
$name = $_GET["name"];
$email = $_GET["email"];
$mob = $_GET["Tel"];
$sql = "UPDATE Students SET Email='$email', Mobile_Number='$mob' WHERE Name = '$name'";
if ($con->query($sql) === TRUE) {
echo "Record successfully Updated";
}
else {
echo "Error: " . $sql . "<br>" . $con->error;
}