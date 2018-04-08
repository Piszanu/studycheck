<?php
require_once($_SERVER['DOCUMENT_ROOT'] . "/studycheck/controller/" ."mysqlConn.php");
$teacherid = $_POST["teacherid"];
$date = $_POST["date"];

$sql = "SELECT subject.SUBJECT_ID, subject.SUBJECT_CODE, subject.SUBJECT_NAME, class.CLASS_ID, class.DATE
FROM subject
LEFT JOIN class ON class.SUBJECT_ID = subject.SUBJECT_CODE
WHERE subject.TEACHER_CODE = '".$teacherid."' AND class.DATE = '".$date."'";
 
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
    echo "";
}
$conn->close();
?>