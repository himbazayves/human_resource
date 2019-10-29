<?php
session_start();
$conn=mysqli_connect("localhost","root","","human_ressource");

$query1=mysqli_query($conn,"select * from employee where id='".$_SESSION['userId']."'") or die("selecting error");
                $row=mysqli_fetch_assoc($query1);
if (isset($_POST['edit']))
{
$email=$_POST['email'];
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$phone=$_POST['phone'];
$gender=$_POST['gender'];
$position=$_POST['position'];
$username=$_POST['username'];
$password=$_POST['password'];
//$qry=$conn->query("INSERT INTO `human_ressource`.`employee` (`id`, `email`, `fname`, `lname`, `phone`, `gender`, `position`, `username`, `password`) 
//VALUES (NULL, '$email', '$fname', '$lname', '$phone', '$gender', '$position', '$username', '$password')");

$qry=$conn->query("UPDATE  `human_ressource`.`employee` SET  `email` =  '$email',
`fname` =  '$fname',
`lname` =  '$lname',
`phone` =  '$phone',
`gender` =  '$gender',
`username` =  '$username',
`password` =  '$password' WHERE  `employee`.`id` ='".$_SESSION['userId']."' LIMIT 1") ;

if($qry)
{
    echo "<script>alert('updated successful')</script>";
    echo"<script>location.href='updateinfo.php';</script>";

}
else
{
    echo "<script>alert('fail to update')</script>";
}
}



?>



<html>
    <head>
        <link rel="stylesheet" type="text/css" href="css/style.css">
    </head>
    <body>
        <a href="employeedashboard.php">Back>>>...</a>
        <div class="register">
           
            <form action="#" method="POST">
                <p>email<br>
                    <input type="text" name="email" value="<?php echo $row['email'];?>">
                </p>
                <p>first name<br>
                    <input type="text" name="fname" value="<?php echo $row['fname'];?>">
                </p>
                <p>last name<br>
                    <input type="text" name="lname" value="<?php echo $row['lname'];?>">
                </p>
                <p>phone<br>
                    <input type="text" name="phone" value="<?php echo $row['phone'];?>">
                </p>
                <p>gender<br>
                    <input type="text" name="gender" value="<?php echo $row['gender'];?>">
                </p>
                <p>position<br>
                    <input type="text" name="position" value="<?php echo $row['position'];?>" readonly style="background:gray;color:white;">
                </p>
                <p>username<br>
                    <input type="text" name="username" value="<?php echo $row['username'];?>">
                </p>
                <p>password<br>
                        <input type="text" name="password" value="<?php echo $row['password'];?>">
                    </p>
                    <p>
                            <input type="submit" name="edit" value="edit">
                        </p>
            </form>

        </div>
    </body>
</html>