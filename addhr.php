<?php
if (isset($_POST['register']))
{
$conn=mysqli_connect("localhost","root","","human_ressource") or die($conn->error());
$id=($_POST["id"]);
$email=$_POST['email'];
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$phone=$_POST['phone'];
$gender=$_POST['gender'];
$position=$_POST['position'];
$username=$_POST['username'];
$password=$_POST['password'];
$usertype="human_resource";
$positionn="HUMAN RERSOURCE";
$start_date=date("Y-m-d");


$qry=$conn->query("INSERT INTO `human_ressource`.`employee` (`id`, `email`, `fname`, `lname`, `phone`, `gender`, `position`, `department`, `username`, `password`,`start_date`,`usertype`) 
VALUES ($id, '$email', '$fname', '$lname', '$phone', '$gender', '$position','$positionn', '$username', '$password','$start_date','$usertype')");


if($qry)
{
    echo "<div class='alert alert-success'>HR  created sucessfull.</div>";
}
else
{
    echo "<div class='alert alert-danger'>Unable to create new HR. Please try again.</div>";
}
}






?>



<?php
session_start();
?>
<html>
<head>


<!-- Bootstrap core CSS -->
<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

<!-- Custom styles for this template -->
<link href="css/simple-sidebar.css" rel="stylesheet">

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.js"></script>
    


 






</head>
<body>


<div class="d-flex" id="wrapper">

    <!-- Sidebar -->
    <div class="bg-light border-right" id="sidebar-wrapper">
      <div class="sidebar-heading "><?php echo $_SESSION['first']; ?> </div>
      <div class="list-group list-group-flush">
     
        <a  href="addhr.php" class="list-group-item list-group-item-action bg-light"><span class="glyphicon  glyphicon-plus"> Create new HRM</span></a>
        
        
       
      </div>
    </div>
    <!-- /#sidebar-wrapper -->

    <!-- Page Content -->
    <div id="page-content-wrapper">

      <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
        <button class="btn btn-success" id="menu-toggle">Toggle Menu</button>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
            <li class="nav-item active">
              <!--<a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>-->
              <a  class="nav-link" href="human-resource.php">
          <span class="glyphicon glyphicon-home"></span>
        </a>

            </li>
            
            <li class="nav-item dropdown">
              <a  class="nav-link dropdown-toggle"  id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <span class="glyphicon text-dark glyphicon-user"></span>
              </a>

          



              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                <a class="dropdown-item"  href="index.php"> <span class="glyphicon text-danger glyphicon-off"></span></a>

                
                
            </li>
          </ul>
        </div>
      </nav>


            <form action="#"   class="form-horizontal col-md-6 col-md-offset-3" method="POST">

            <h2>Create HR</h2>
            <div class="form-group">
			    
			    <div class="col-sm-10">
            <input type="number" id="defaultLoginFormEmail" class="form-control "  placeholder="type your random 3 digit number,do not start by zero" name="id" required>
            </div>
            </div>
              
              <div class="form-group">
			    
			    <div class="col-sm-10">
                    <input type="text"  class="form-control" placeholder="email" name="email" required>


                    </div>
                    </div>


              <div class="form-group">
			    
			    <div class="col-sm-10">
                
                    <input type="text"  class="form-control" placeholder="First name" name="fname" required>
                    </div>
                    </div>


            <div class="form-group">
			    
			    <div class="col-sm-10">
                    <input type="text"  class="form-control" placeholder="last name" name="lname" required>
              
                    </div>
                    </div>

                   <div class="form-group">
			    
			    <div class="col-sm-10">
                    <input type="text" class="form-control" placeholder="phone number" name="phone" required>

                    </div>
                    </div>


                    <div class="form-group">
			    
			    <div class="col-sm-10">
               
                    <input type="text"  class="form-control" placeholder="gender" name="gender" required>

                    </div>
                    </div>

                    <div class="form-group">
			    
			    <div class="col-sm-10">
               
                    <input type="text" class="form-control" value="Human resource" placeholder="position" name="position" readonly required>

                    </div>
                    </div>

                    <div class="form-group">
			    
			    <div class="col-sm-10">
                
                    <input type="text" class="form-control" placeholder="username" name="username" required>

                    </div>
                    </div>


                    <div class="form-group">
			    
			    <div class="col-sm-10">
               
                    <input type="password"  class="form-control" placeholder="password" name="password" required>
                    </div>
                    </div>


                    <div class="form-group">
			    
			    <div class="col-sm-10">
                   
                    <input type="submit" class="btn btn-primary col-md-2 col-md-offset-10" name="register" value="create">




                    </div>
                    </div>

                        
            </form>

        </div>
    </body>
</html>