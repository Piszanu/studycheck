<?php
require_once("mysqlConn.php");

$sql = "SELECT subject.SUBJECT_ID, subject.SUBJECT_NAME, subject.SUBJECT_CODE, subject.TEACHER_CODE, teacher.NAME 
    FROM subject LEFT JOIN teacher ON teacher.TEACHER_ID = subject.TEACHER_CODE";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
            $output['data'][] = $row;
    }
    echo json_encode( $output );
} else {
    echo "";
}
$conn->close();
?>