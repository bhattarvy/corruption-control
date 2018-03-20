<?php

$fname=$_POST['firstName'];
$lname=$_POST['lastName'];
$dob=$_POST['dob'];
$gender=$_POST['gender'];
$email=$_POST['email'];
$mobno=$_POST['mobno'];
$address=$_POST['address'];
$city=$_POST['City'];
$sql = "INSERT INTO reg VALUES ('$fname','$lname','$gender','$dob','$email','$mobno','$address','$city')";


$user='root';
$pass='';
$db='mydb';
$conn= new  mysqli('localhost',$user,$pass,$db) or die("unable to connect");
//$sql = "INSERT INTO reg VALUES ('arvy','bhatt','23-10-1998','male','rvindbhatt199@gmail.com','868616406','njsdnfdsfn','nkdnf')  ";

$ret=mysqli_query($conn,$sql);

if(!$ret)
	echo "user with same email or phone no already registered";
else
	echo "thankyou for registeration";

?>