<?php

session_start();
 

$con = mysqli_connect('localhost','root','','student_registration');

$username = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];

$s = "select * from user where username = '$username'&& password = '$password' && email ='$email' ";
$result = mysqli_query($con,$s);

$num = mysqli_num_rows($result);

if($num ==1){
    
    $_SESSION['username'] = $username;
    //$dept_id= null;
    //$sql="select * from user where dept_id =$dept_id";
    $sql="select dept_id from user where username='$username'";
    $r=mysqli_query($con,$sql);
        if ($r==null){
            header('location:choosedepartment.php');
        }else{
           header('location:courses.php'); 
        }
    //($con->query($s) === TRUE) {
			//($dept_id != 0){
                //header('location:courses.php');
               // echo"corse";
            //}else{
               // header('location:choosedepartment.php');
           //}
   // }
  
}else{
    echo "<script>alert('wrong password or username or email')</script>";
    //header('location:form.php');
}

?>