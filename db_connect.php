<?php
$servername = "sql304.infinityfree.com";
$username = "if0_36742667";       
$password = "zwGCsemUc0h5SG";            
$dbname = "if0_36742667_finance";       

$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
