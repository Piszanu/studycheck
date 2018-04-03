<?php
require_once("mysqlConn.php");
$username = $_POST["username"];
$password = $_POST["password"];

$sql = "SELECT * FROM `teacher` WHERE `USERNAME` = '".$username."' AND `PASSWORD` = '".$password."'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $output;
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $output .= json_encode($row);
    }
    echo $output;
} else {
    echo "Fail";
}
$conn->close();
?>