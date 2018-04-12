<?php
require_once($_SERVER['DOCUMENT_ROOT'] . "/studycheck/controller/" ."mysqlConn.php");
$stdid = $_POST["stdid"];

$sql = "SELECT `NAME` FROM `studen_info` WHERE `STUDEN_CODE` = '".$stdid."'";
 
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
    echo "notfound";
}
$conn->close();
?>