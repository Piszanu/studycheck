<?php
require_once("mysqlConn.php");

$sql = "SELECT `STUDEN_ID`, `STUDEN_CODE`,`NAME` FROM `studen_info` WHERE `STUDEN_CODE` LIKE '%".$_GET['param']."%' OR `NAME` LIKE '%".$_GET['param']."%'";
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