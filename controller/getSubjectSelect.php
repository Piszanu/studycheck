<?php
require_once("mysqlConn.php");
$teacherid = $_POST["teacherid"];

$sql = "SELECT  `SUBJECT_NAME`, `SUBJECT_CODE` FROM `subject` WHERE `TEACHER_CODE` = '".$teacherid."'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $output;
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $output .= "<option value='".$row["SUBJECT_CODE"]."'>".$row["SUBJECT_NAME"]."</option>";
    }
    echo $output;
} else {
    echo "Fail";
}
$conn->close();
?>