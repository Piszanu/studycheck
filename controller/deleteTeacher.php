<?php
require_once("mysqlConn.php");
$id = $_POST["id"];

$sql = "DELETE FROM `teacher` WHERE `TEACHER_ID` = '".$id."'";

if ($conn->query($sql) === TRUE) {
    echo "Success";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>