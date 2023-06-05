<?php
//get data from form
$name =$_POST['name'];
$email = $_POST['email'];
$message = POST['message'];
$phone_no = POST['phone_no'];


$to = "melsounds4u@gmail.com";
$subject = "Mail From website";
$txt = "Name =". $name . "\r\n Email = ". $email . "\r\n Message =".$message"
\r\n Phone no =". $phone_no;
?>