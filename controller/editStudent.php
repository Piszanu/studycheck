<?php
require_once("mysqlConn.php");
$id = $_POST["id"];
$studentcode = $_POST["studentcode"];
$name = $_POST["name"];
$address = $_POST["address"];
$tel = $_POST["tel"];
$sexSelect = $_POST["sexSelect"];
$age = $_POST["age"];
$bloodgroup = $_POST["bloodgroup"];

$sql = "UPDATE `studen_info` SET `STUDEN_CODE`='".$studentcode."',`NAME`='".$name."',`ADDRESS`='".$address."',`TEL`='".$tel."',
`SEX`='".$sexSelect."',`AGE`='".$age."',`BLOOD_TYPE`='".$bloodgroup."' WHERE `STUDEN_ID` = '".$id."'";

if ($conn->query($sql) === TRUE) {
    echo "Success";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>