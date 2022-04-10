<?php
$fname=$_POST['fn'];
$lname=$_POST['ln'];
$email=$_POST['em'];
$message=$_POST['msg'];
$description=$_POST['des'];
echo 'First Name= ',$fname;
echo '</br> Last Name= ',$lname;
echo '</br> email= ',$email;
echo '</br> MESSAGE= ',$message;
echo '</br> Additional description= ',$description;
$con=mysqli_connect('localhost','root',',','contact_us');
$r=mysqli_query($con,"insert into students(fname,lname,email,message,description)values('$fname','$lname','$email',,'$message','$description')");
if($r)
    echo '</br> Insert successful' 
    else
    echo mysqli_error($con);
?>