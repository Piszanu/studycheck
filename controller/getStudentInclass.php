<?php
require_once("mysqlConn.php");

$sql = "SELECT class_student.CLASS_ID, class_student.STUDENT_CODE, studen_info.NAME
    FROM class_student
    LEFT JOIN studen_info ON studen_info.STUDEN_CODE = class_student.STUDENT_CODE
    WHERE class_student.CLASS_ID = '".$_GET['id']."'";
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