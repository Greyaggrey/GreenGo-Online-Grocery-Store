<?php
$servername='localhost';
$username='root';
$password='';
$dbname = "example";
$conn=mysqli_connect($localhost,$username,$password,$example);
if(!$conn){
   die('Could not Connect My Sql:' .mysql_error());
}
?>