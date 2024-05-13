<?php
$con = new mysqli("localhost", "root", "", "Students");
if($con->connect_error){
die("Connection failed: " . $con->connect_error);
}
$sql = "select * from students";
if ($result = $con->query($sql)) {
while ($row = $result->fetch_assoc()) {
echo "<br>";
echo "Name: ".$row["Name"]. "<br>";
echo "Email: ".$row["Email"]. "<br>";
echo "Tel: ".$row["Mobile_Number"]. "<br>";
echo "Course: ".$row["Course"]. "<br>";
}
$result->free();
}