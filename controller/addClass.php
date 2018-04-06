<?php
require_once("mysqlConn.php");
$subjectSelect = $_POST["subjectSelect"];
$date = $_POST["date"];
$time = $_POST["time"];
$statusSelect = $_POST["statusSelect"];
//$arrDate = explode("/",$date);
//$date = $arrDate[2]."-".$arrDate[1]."-".$arrDate[0];

$sql = "INSERT INTO `class`(`SUBJECT_ID`, `DATE`, `TIME`, `STATUS`)
VALUES ('".$subjectSelect."',STR_TO_DATE('".$date."','%d/%m/%Y'),'".$time.":00','".$statusSelect."')";

if ($conn->query($sql) === TRUE) {
    echo "Success";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>