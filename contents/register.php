<?php
$connection=new mysqli("localhost","root","","mytest");
if ($connection->connect_error) {
    die("connection failed: ".$connection->connect_error);
}
if ($_SERVER["REQUEST_METHOD"]=="POST") {
   $email=$_POST['email'];
   $password=password_hash($_POST['password'],PASSWORD_DEFAULT);
   $sql="INSERT INTO user (email,password) VALUES('$email','$password')";
   if ($connection->query($sql)==TRUE) {
    echo"Registration successfully!!";
    header("Location: login.html");
    exit();
   }else {
    echo "Error: ".$ql."<br>".connection_error;
   }
}  $connection->close();
?>