<?php
require_once("mysqlConn.php");
$subjectcode = $_POST["subjectcode"];
$subjectid = $_POST["subjectid"];

$sql = "SELECT `DATE`, `TIME` FROM `class` WHERE `SUBJECT_ID` = '".$subjectcode."'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    //$data = array();
    $data = array("name"=>"รหัส","data"=>"STUDENT_CODE");
    $output['columns'][] = $data;
    $data = array("name"=>"ชื่อ","data"=>"NAME");
    $output['columns'][] = $data;
    while($row = $result->fetch_assoc()) {
        $data['name'] = $row['DATE']."<br>".$row['TIME'];
        $data['data'] = $row['DATE'];
        $output['columns'][] = $data ;
    }
    $sql = "SELECT class_student.STUDENT_CODE, studen_info.NAME
    FROM class_student
    LEFT JOIN studen_info ON studen_info.STUDEN_CODE = class_student.STUDENT_CODE
    WHERE class_student.CLASS_ID = '".$subjectid."'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            $output['data'][] = $row ;

            $sql2 = "";
        }
        echo json_encode( $output );
    } else {
        echo "{}";
    }
} else {
    echo "{}";
}
$conn->close();
?>