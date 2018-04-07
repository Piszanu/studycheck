<?php
require_once("mysqlConn.php");
$data = $_POST["data"];
$SUBJECT_ID = $_POST["SUBJECT_ID"];
//$stdList = json_decode($data);

$sql = "";

if (count($data) > 0) {
    foreach($data as $x => $value) {
        $sql .= "DELETE FROM `class_student` WHERE `CLASS_ID` = '".$SUBJECT_ID."' AND `STUDENT_CODE` = '".$value['STUDENT_CODE']."'; ";
    }
    if ($conn->multi_query($sql) === TRUE) {
        echo "Success";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}else {
    echo "กรุณาเลือกนักศึกษาก่อน";
}
$conn->close();
?>