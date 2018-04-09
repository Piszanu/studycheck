<?php
require_once($_SERVER['DOCUMENT_ROOT'] . "/studycheck/controller/" ."mysqlConn.php");
$classid = $_POST["classid"];
$date = $_POST["date"];

$sql = "SELECT class_student.STUDENT_CODE, studen_info.NAME, subject.SUBJECT_NAME
FROM class_student 
LEFT JOIN studen_info ON studen_info.STUDEN_CODE = class_student.STUDENT_CODE
LEFT JOIN subject ON subject.SUBJECT_ID = class_student.CLASS_ID
LEFT JOIN class on class.SUBJECT_ID = subject.SUBJECT_CODE
WHERE class.CLASS_ID = '".$classid."' AND class.DATE = '".$date."'";
 
$result = $conn->query($sql);
$resultArray = array();
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        array_push($resultArray,$row);
    }
    echo json_encode($resultArray);
} else {
    header ('Content-type: text/html; charset=utf-8');
    echo "No Student.";
}
$conn->close();
?>