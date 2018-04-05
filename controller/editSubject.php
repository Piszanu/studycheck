<?php
require_once("mysqlConn.php");
$id = $_POST["id"];
$subjectname = $_POST["subjectname"];
$subjectcode = $_POST["subjectcode"];
$teacherSelect = $_POST["teacherSelect"];

$sql = "UPDATE `subject` SET `SUBJECT_NAME`='".$subjectname."',`SUBJECT_CODE`='".$subjectcode."',`TEACHER_CODE`='".$teacherSelect."'
 WHERE `SUBJECT_ID` = '".$id."'";

if ($conn->query($sql) === TRUE) {
    echo "Success";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>