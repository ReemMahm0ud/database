<?php
session_start();

if(isset($_POST['submit'])){
    $course=$_POST['course'];
    echo"you choosed $course" ;
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
    <a href="logout.php">LOGOUT</a>
    <div class="container">
        <div class="holder">
            <h2>Welcome <?php echo $_SESSION['username']; ?></h2>
            <form  class="customradio" method="post">
                <div class="row">
                    <p>choose your course:</p>
                </div>
                <?php if($_SESSION['dept_id']==1) : ?>
                     <div class="row">
                    <input type="radio" name="course" value="digital" checked>
                    <label for="digital">digital</label>
                </div>
                <div class="row">
                    <input type="radio" name="course" value="analog">
                    <label for="analog">analog</label>
                </div>
                <?php elseif($_SESSION['dept_id']==2) : ?>
                       <div class="row">
                    <input type="radio" name="course" value="programming1" >
                    <label for="programming1">programming1</label>
                </div>
                <div class="row">
                    <input type="radio" name="course" value="algorithms">
                    <label for="algorithms">algorithms</label>
                </div>
                <?php elseif($_SESSION['dept_id']==3) : ?>
                      <div class="row">
                    <input type="radio" name="course" value="mechanics1" >
                    <label for="mechanics1">mechanics1</label>
                </div>
                <div class="row">
                    <input type="radio" name="course" value="mechanics2">
                    <label for="mechanics2">algorithms</label>
                </div>
                <?php elseif($_SESSION['dept_id']==4) : ?>
                      <div class="row">
                    <input type="radio" name="course" value="architacture">
                    <label for="architacture">algorithms</label>
                </div>
                  <?php endif; ?>     
                 <p><input type="submit" name="submit" value="submit" ></p>
            
            </form>
             
        </div>
        
    
    
    </div>
    
    
    
    </body>
</html>
