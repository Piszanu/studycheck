<?php
require_once("mysqlConn.php");
$id = $_POST["id"];
$subjectSelect = $_POST["subjectSelect"];
$date = $_POST["date"];
$time = $_POST["time"];
$statusSelect = $_POST["statusSelect"];
//$arrDate = explode("/",$date);
//$date = $arrDate[2]."-".$arrDate[1]."-".$arrDate[0];

$sql = "UPDATE `class` SET `SUBJECT_ID`='".$subjectSelect."',`DATE`=STR_TO_DATE('".$date."','%d/%m/%Y'),`TIME`='".$time.":00',`STATUS`='".$statusSelect."'
 WHERE `CLASS_ID` = '".$id."'";

if ($conn->query($sql) === TRUE) {
    echo "Success";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>