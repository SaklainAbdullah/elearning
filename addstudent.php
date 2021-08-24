<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "elearning";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sname=$_POST['stuname'];
$semail=$_POST['stuemail'];
$spass=sha1($_POST['stupass']);
//$expense=$_POST['e'];

$sql = "INSERT INTO studentinfo(sname,semail,spass)
VALUES ('$sname', '$semail','$spass')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: ".$sql."<br>".$conn->error;
}

$conn->close();
?>
