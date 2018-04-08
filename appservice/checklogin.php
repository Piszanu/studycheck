<?php
require_once($_SERVER['DOCUMENT_ROOT'] . "/studycheck/controller/" ."mysqlConn.php");
$username = $_POST["username"];
$password = $_POST["password"];

$sql = "SELECT `TEACHER_ID`, `NAME` FROM `teacher` WHERE `TYPE` = 'teacher' AND 
`USERNAME` = '".$username."' AND `PASSWORD` = '".$password."'";

$result = $conn->query($sql);
if($result->num_rows === 0)
{
    $arr['StatusID'] = "0"; 
    $arr['TEACHER_ID'] = "0";
    $arr['NAME'] = ""; 
    $arr['Error'] = "Incorrect Username and Password";	
}
else
{
    while($row = $result->fetch_assoc()) {
        $arr['StatusID'] = "1"; 
        $arr['TEACHER_ID'] = $row["TEACHER_ID"]; 
        $arr['NAME'] = $row["NAME"]; 
        $arr['Error'] = "";	
    }
}

/**
    $arr['StatusID'] // (0=Failed , 1=Complete)
    $arr['MemberID'] // MemberID
    $arr['Error' // Error Message
*/

echo json_encode($arr);
    
$conn->close();
?>