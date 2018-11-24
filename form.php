<?php
$name=$_POST['name'];
$phone=$_POST['phone'];
$email=$_POST['email'];
$college=$_POST['college'];

$message=$_POST['msg'];

include('connect.php');
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql="insert into Contact_Form values('$name','$phone','$email','$college','$message')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
    print '<script type="text/javascript">';
	print 'alert("The data is inserted...")';
	print '</script>';
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

?>
