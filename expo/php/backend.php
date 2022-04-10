<?php
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$email=$_POST['email'];
$message=$_POST['message'];
$description=$_POST['description'];
echo 'First Name= ',$fname;
echo '</br> Last Name= ',$lname;
echo '</br> Email= ',$email;
echo '</br> Message= ',$message;
echo '</br> Additional description= ',$description;
$con=mysqli_connect("localhost","root","","tour");
$r=mysqli_query($con,"insert into contacts(fname,lname,email,message,description)values('$fname','$lname','$email','$message','$description')");
if($r)
    echo '</br> Insert Successfully'; 
    else
    echo mysqli_error($con);
?>