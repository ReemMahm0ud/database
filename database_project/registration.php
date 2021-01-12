<?php

session_start();
//header('choosedepartment.php'); 

$con = mysqli_connect('localhost','root','','student_registration');

$username = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];

$s = "select * from user where username = '$username'";

$result = mysqli_query($con,$s);

$num = mysqli_num_rows($result);

if($num ==1){
  echo "<script>alert('username already taken')</script>"; 
  
}else{
    //$password = md5($password);
    $reg="insert into user(username , password , email) values ('$username' , '$password' , '$email')";
    $sql = "UPDATE user SET registration_date
CURRENT_TIMESTAMP WHERE username = '$username'";
    mysqli_query($con,$reg);
    echo "registration succesful";
    $_SESSION['username'] = $username;
    header('location:choosedepartment.php'); 
}

?>