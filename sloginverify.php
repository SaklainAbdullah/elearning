<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "elearning";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    //echo "Error";
}

$username=mysqli_real_escape_string($conn,trim($_POST['stuLogemail']));
$password=mysqli_real_escape_string($conn,trim(sha1($_POST['stuLogpass'])));
//$username=$_POST['username'];
//$password=$_POST['pass'];
$query="SELECT sname,spass FROM studentinfo WHERE sname='$username' AND spass='$password'";
//$expense=$_POST['e'];
$data=mysqli_query($conn,$query);
//echo mysqli_num_rows($data);
if(mysqli_num_rows($data)==1)
{
  echo <<<HTML

<a href="index2.html"><h3 style="color:white; text-align:center">LOGIN SUCCESSFUL!!!</a>
</div>
HTML;
}

$conn->close();
?>
