<?php

$uname=$_POST['username'];
$area=$_POST('area');
$pc=$_POST('projectcost');
$apc=$_POST('actualpc');
$pd=$_POST('projectduration');
$apd=$_POST('actualpd');
$tl=$_POST('timelag');



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