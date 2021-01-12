<?php
session_start();
$con = mysqli_connect('localhost','root','','student_registration');
$query = "select * from department";
$result1 = mysqli_query($con,$query);
$x=$_SESSION['username'];
if(isset($_POST['submit'])){
    $dept_id=$_POST['department'];
    $_SESSION['what']=$deptid;
    $sql="UPDATE user set dept_id = $dept_id where username='$x'";
    $x=$con->query($sql);
    if($x){
        $_SESSION['dept_id'] = $dept_id;
        header("location:courses.php");
    }
    
}

?>
<html>

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>choose department</title>
        
        <link href="https://fonts.googleapis.com/css?family=Roboto:300,500" rel="stylesheet">
        
        <link rel="stylesheet" href="css/reset.css">
        <link rel="stylesheet" href="style2.css">
    </head>


<body>
    <div class="container">
        <div class="holder">
            <h2>Welcome <?php echo $_SESSION['username']; ?></h2>
            <form method="post">
                <div class="row">
                    <p>choose your department:</p>
                </div>
                <select name="department">
                    <?php while($row1 =mysqli_fetch_array($result1)):;?>
                    <option value="<?php echo $row1[0];?>"><?php echo $row1[1];?></option>
                    <?php endwhile;?>
                </select>
                <p><input type="submit" name="submit" value="submit" ></p>
            
            </form>
             
        </div>
        
    
    
    </div>
    
    
    
    </body>
</html>     
    
