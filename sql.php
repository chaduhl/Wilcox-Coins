<?php
$servername = "deptprdwb01.cc.ku.edu:2083";
$username = "wilcoxco_admin";
$password = "wilcox";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
   die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>
