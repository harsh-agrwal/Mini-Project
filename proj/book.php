<?php
// database connection code
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');

$con = mysqli_connect('localhost', 'root', '','project');

// get the post records
$name = $_POST['name'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$check_in = $_POST['check_in'];
$check_out = $_POST['check_out'];
$room = $_POST['room'];
$seater = $_POST['seater'];


// database insert SQL code
$sql = "INSERT INTO `book` (`Sname`, `Semail`, `Smobile`, `Scheck_in`, `Scheck_out`,`Sroom`,`Sseater`) VALUES ('$name', '$email', '$mobile', '$check_in', '$check_out','$room','$seater')";

// insert in database 
$rs = mysqli_query($con, $sql);

if($rs)
{
	echo "your choice is booked ";
	echo("");
	header("refresh:3,url=payment.html");
}
else{
	echo"booking not done";
}


?>