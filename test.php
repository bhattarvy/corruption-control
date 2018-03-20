<?php

$user='root';
$pass='';
$db='mydb';
$conn= new  mysqli('localhost',$user,$pass,$db) or die("unable to connect");
$sql = "INSERT INTO reg VALUES ('arvy','bhatt','male',1998-10-98,'arvindbhatt199@gmail.com','8698616406','njsdnfdsfn','nkdnf')";

$ret=mysqli_query($conn,$sql);
if(!$ret)
	echo "not succes";
else
	echo "yes";
?>