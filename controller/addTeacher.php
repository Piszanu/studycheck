<?php
require_once("mysqlConn.php");
$name = $_POST["name"];
$tel = $_POST["tel"];
$typeSelect = $_POST["typeSelect"];
$username = $_POST["username"];
$Password = $_POST["Password"];

$sql = "INSERT INTO `teacher`(`NAME`, `USERNAME`, `PASSWORD`, `TEL`, `TYPE`) 
VALUES ('".$name."','".$username."','".$Password."','".$tel."','".$typeSelect."')";

if ($conn->query($sql) === TRUE) {
    echo "Success";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>