<?php
require_once("mysqlConn.php");
$id = $_POST["id"];
$name = $_POST["name"];
$tel = $_POST["tel"];
$typeSelect = $_POST["typeSelect"];
$username = $_POST["username"];
$Password = $_POST["Password"];

$sql = "UPDATE `teacher` SET `NAME`='".$name."',`USERNAME`='".$username."',`PASSWORD`='".$Password."',`TEL`='".$tel."',`TYPE`='".$typeSelect."'
 WHERE `TEACHER_ID` = '".$id."'";

if ($conn->query($sql) === TRUE) {
    echo "Success";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>