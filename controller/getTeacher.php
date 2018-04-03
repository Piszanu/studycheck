<?php
require_once("mysqlConn.php");

$sql = "SELECT * FROM `teacher`";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
            $output['data'][] = $row;
    }
    echo json_encode( $output );
} else {
    echo "Fail";
}
$conn->close();
?>