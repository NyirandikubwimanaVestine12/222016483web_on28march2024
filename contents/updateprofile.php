<?php
session_start();
if (!isset($_SESSION['user_id'])){
    header("location:login.html");
    exit();
} 
$connection=new mysqli("localhost","root","","mytest");
if ($connection->connect_error) {
    die("connection failed: ".$connection->connect_error);
}
$user_id=$_SESSION['user_id'];
if ($_SERVER["REQUEST_METHOD"]=="POST") {
   $firstname=$_POST['firstname'];
   $lastname=$_POST['lastname'];
   $sql="UPDATE profile SET firstname='$firstname',lastname='$lastname',iscompleted=1, WHERE user_id='user_id'";
   if($connection->query($sql) == TRUE);
   echo"Profile updated successfully!!";
   header("location: #");
}
else {
    echo"Error updating profle:".$connection->error;
}
$connection->close();
?>
   