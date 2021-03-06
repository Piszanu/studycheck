<?php
require_once("mysqlConn.php");

$sql = "SELECT class.CLASS_ID, subject.SUBJECT_CODE, subject.SUBJECT_NAME, subject.TEACHER_CODE, teacher.NAME, DATE_FORMAT(class.DATE,'%d/%m/%Y') DATE, 
DATE_FORMAT(class.TIME,'%H:%i') TIME, class.STATUS
FROM class
LEFT JOIN subject ON subject.SUBJECT_CODE = class.SUBJECT_ID
LEFT JOIN teacher ON teacher.TEACHER_ID = subject.TEACHER_CODE";
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