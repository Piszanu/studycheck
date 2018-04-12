<?php
require_once($_SERVER['DOCUMENT_ROOT'] . "/studycheck/controller/" ."mysqlConn.php");
$classid = $_POST["classid"];
$stdid = $_POST["stdid"];
$date = $_POST["date"];
$time = $_POST["time"];
$status = $_POST["status"];

$sql = "INSERT INTO `class_check`(`CLASS_ID`, `DATE`, `TIME`, `STUDENT_ID`, `STATUS`) 
VALUES ('".$classid."','".$date."','".$time."','".$stdid."','".$status."')";

$sql2 = "SELECT class_student.STUDENT_CODE
FROM class_student
LEFT JOIN subject ON subject.SUBJECT_ID = class_student.CLASS_ID
LEFT JOIN class ON class.SUBJECT_ID = subject.SUBJECT_CODE
WHERE class.CLASS_ID = '".$classid."' AND class_student.STUDENT_CODE = '".$stdid."'";

$result = $conn->query($sql2);
if ($result->num_rows > 0) {
    $sql3 = "SELECT `STUDENT_ID`, `STATUS` FROM `class_check` WHERE `CLASS_ID` = '".$classid."' AND `STUDENT_ID` = '".$stdid."'";
    $result2 = $conn->query($sql3);
    if ($result2->num_rows == 0) {
        if ($conn->query($sql) === TRUE) {
        // output data of each row
        header ('Content-type: text/html; charset=utf-8');
        echo "success";
        } else {
            header ('Content-type: text/html; charset=utf-8');
            echo "error";
        }
    }else {
        header ('Content-type: text/html; charset=utf-8');
        echo "haved";
    }
    
} else {
    header ('Content-type: text/html; charset=utf-8');
    echo "notfound";
}

$conn->close();
?>