<?php
session_start();
$conn=mysqli_connect('localhost','root','','human_ressource') or die('Connection fails');
if(isset($_POST['Login']))
{
    if(isset($_POST['username']))
    {
        $username=$_POST['username'];
        $_SESSION['username'] = $username;
       
    }
    if(isset($_POST['password']))
    {
        $password=$_POST['password'];
    }
    $query=mysqli_query($conn,"select * from employee where username='$username' and password='$password'") or die("selecting error");
    $count=mysqli_num_rows($query);
    $row=mysqli_fetch_assoc($query);
    $uid=$row['id'];
    $_SESSION['userId']=$uid;
    $name=$row['fname'];
    $_SESSION['first']=$name;
    
    if($count==1 and $row['usertype']=='employee')
    {
        
        echo"<script>location.href='employeedashboard.php';</script>";
    }
    if($count==1 and $row['usertype']=='human_resource')
    {
        
        
        echo"<script>location.href='human-resource.php';</script>";
    }
    
    else
    {
        $query=mysqli_query($conn,"select * from admin where username='$username' and password='$password'") or die("selecting error");
        $count=mysqli_num_rows($query);
        $row=mysqli_fetch_assoc($query);
        
        if($count >0)
        {
            echo"<script>location.href='admin.php';</script>";
    
        }
        else
        {
            echo "<script>alert('incorect credentials')</script>";
        }
       }
}
?>
<html>
    <head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="css/style.css">
    </head>
    <body class=" bg-light">
        
    <a class="btn btn-info btn-block my-4" href="index.php">Employee Management  System</a>

    
<div class="container">
<!-- Default form login -->

<div class="row">

<div class="col-lg col-sm-12"></div>

<div class="col-lg col-sm-12">
<form action="index.php" method="POST" class="text-center border border-light p-5" >

    <p class="h4 mb-4">Sign in</p>

    <!-- Email -->
    <input type="text" name="username" id="defaultLoginFormEmail" class="form-control mb-4"  placeholder="Username">

    <!-- Password -->
    <input  name="password" type="password" id="defaultLoginFormPassword" class="form-control mb-4" placeholder="Password">

    <div class="d-flex justify-content-around">
        <div>
            <!-- Remember me -->
            <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" id="defaultLoginFormRemember">
                <label class="custom-control-label" for="defaultLoginFormRemember">Remember me</label>
            </div>
        </div>
        
    </div>

    <!-- Sign in button -->
    <button   name="Login" class="btn btn-info btn-block my-4" type="submit">Sign in</button>

    <!-- Register -->
   

   
    

</form>
</div>

<div class="col-lg col-sm-12"></div>
</div>
<!-- Default form login -->
        </div>


        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>
</html>



