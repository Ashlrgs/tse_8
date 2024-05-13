<?php
$con = new mysqli("localhost", "root", "", "Students");
if($con->connect_error){
die("Connection failed: " . $con->connect_error);
}
$name = $_GET["name"];
$sql = "DELETE FROM Students WHERE Name = '$name'";
if ($con->query($sql) === TRUE) {
echo "Record successfully deleted";
}
else {
echo "Error: " . $sql . "<br>" . $con->error;
}