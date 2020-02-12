<?php
$con=mysqli_connect("localhost","root","","Coffeeshop");
if(mysqli_connect_errno()){
    echo "failed".mysqli_connect_error();
    die();
}

mysqli_select_db($con,'coffeeshop');
$user =$_POST['user'];
$email =$_POST['email'];
$mobile =$_POST['mobile'];
$comments =$_POST['comments'];

$query = "insert into userinfodata(user,email,mobile,comments)values('$user','$email','$mobile','$comments')";
echo "$query";
mysqli_query($con,$query);

?>