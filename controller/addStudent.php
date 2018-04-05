<?php
require_once("mysqlConn.php");
$studentcode = $_POST["studentcode"];
$name = $_POST["name"];
$address = $_POST["address"];
$tel = $_POST["tel"];
$sexSelect = $_POST["sexSelect"];
$age = $_POST["age"];
$bloodgroup = $_POST["bloodgroup"];

$sql = "INSERT INTO `studen_info`(`STUDEN_CODE`, `NAME`, `ADDRESS`, `TEL`, `SEX`, `AGE`, `BLOOD_TYPE`) 
VALUES ('".$studentcode."','".$name."','".$address."','".$tel."','".$sexSelect."','".$age."','".$bloodgroup."')";

if ($conn->query($sql) === TRUE) {
    echo "Success";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>