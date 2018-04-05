<?php
require_once("mysqlConn.php");
$subjectname = $_POST["subjectname"];
$subjectcode = $_POST["subjectcode"];
$teacherSelect = $_POST["teacherSelect"];

$sql = "INSERT INTO `subject`(`SUBJECT_NAME`, `SUBJECT_CODE`, `TEACHER_CODE`) 
VALUES ('".$subjectname."','".$subjectcode."','".$teacherSelect."')";

if ($conn->query($sql) === TRUE) {
    echo "Success";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>