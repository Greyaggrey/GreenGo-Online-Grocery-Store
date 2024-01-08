<?php
reqiure_once('connect.php');
$name = $telephonenumber = $email = $dateofbirth = $address ="";

$name = $_POST['name'];
$telephonenumber = $_POST['telephonenumber'];
$email = $_POST['email'];
$dateofbirth = $_POST['dateofbirth'];
$address = $_POST['address'];

$sql = "INSERT INTO form(name,telephonenumber,email,dateofbirth,address)
        VALUES ('$name','$telephonenumber','$email','$dateofbirth','$address')";
$result = mysqli_query($conn,$sql);
if ($result) {
	header("Location:login.html");
}
else
{
	echo "Error :".$sql;
}
?>
