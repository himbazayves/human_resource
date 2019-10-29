<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "human_ressource";

$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
if(isset($_POST['add_salary']))
{
	$id=$_POST['id'];
    $salary=$_POST['salary'];
    $editref=$conn->query("UPDATE  `human_ressource`.`salary` SET salary='$salary' WHERE salary.id='$id'");

    
  
	
	if($editref==true)
	{
    header("location: salary_add.php");
		
	}
	else
	{
		echo "<script>alert('fail to update')</script>";
	}
}
?>










<?php
// Check existence of id parameter before processing further
if(isset($_GET["id"]) && !empty(trim($_GET["id"]))){
    // Include config file
    require_once "config.php";
    
    // Prepare a select statement
    $sql = "SELECT * FROM employee WHERE id = ?";
    
    if($stmt = mysqli_prepare($link, $sql)){
        // Bind variables to the prepared statement as parameters
        mysqli_stmt_bind_param($stmt, "i", $param_id);
        
        // Set parameters
        $param_id = trim($_GET["id"]);
        
        // Attempt to execute the prepared statement
        if(mysqli_stmt_execute($stmt)){
            $result = mysqli_stmt_get_result($stmt);
    
            if(mysqli_num_rows($result) == 1){
                /* Fetch result row as an associative array. Since the result set contains only one row, we don't need to use while loop */
                $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
                
                // Retrieve individual field value
                
                $email=$row['email'];
                $fname=$row['fname'];
                $lname=$row['lname'];
                $phone=$row['phone'];
                $gender=$row['gender'];
                $position=$row['position'];
                $position=$row['department'];
                $username=$row['username'];
            } else{
                // URL doesn't contain valid id parameter. Redirect to error page
                header("location: error.php");
                exit();
            }
            
        } else{
            echo "Oops! Something went wrong. Please try again later.";
        }
    }
     
    // Close statement
    mysqli_stmt_close($stmt);
    
    // Close connection
    mysqli_close($link);
} else{
    // URL doesn't contain id parameter. Redirect to error page
    header("location: error.php");
    exit();
}
?>
<?php
session_start();
?>
<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

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
     
        <a href="addemployee.php" class="list-group-item list-group-item-action bg-light"><span class="glyphicon  glyphicon-plus"> New Employee</span></a>
        <a href="aprovevac.php" class="list-group-item list-group-item-action bg-light"> <span class="glyphicon glyphicon-check"> Aprove Leave</span></a>
        
        <a href="employee_report.php" class="list-group-item list-group-item-action bg-light"><span class="glyphicon glyphicon-list-alt"></span>  Employee List</a>
        <a href="salary.php" class="list-group-item list-group-item-action bg-light"><span class="glyphicon glyphicon-eur"></span> Salaries</a>
        <a href="employee_transfer.php" class="list-group-item list-group-item-action bg-light"> <span class="glyphicon glyphicon-retweet"></span> Transfer</a>
        <a href="working_history.php" class="list-group-item list-group-item-action bg-light"> <span class=" glyphicon glyphicon-book"></span> Employee history</a>
        <a href="hr-transfer.php" class="list-group-item list-group-item-action bg-light"> <span class="glyphicon glyphicon-wrench"></span> Acount Settings</a>
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
                <a class="dropdown-item" href="hr-transfer.php"> <span class="glyphicon text-danger glyphicon-off"></span></a>

                
                <div class="dropdown-divider"></div>
                <a class="dropdown-item"  href="index.php"> <span class="glyphicon text-danger glyphicon-wrench"></span></a>
              </div>
            </li>
          </ul>
        </div>
      </nav>





<center> <h1>Add new salary</h1> </center>


<!--we have our html table here where the record will be displayed-->

<form action="#" method="POST"  >
<table class='table table-hover table-striped  table-bordered'>

<tr>
        <td>Salary</td>
        <td> <input type="text" class="form-control" name="salary"  value="0" ?></td>
    </tr>

    <tr>
        <td> #</td>
        <td>  <input type="text" class="form-control" name="id" value="<?php echo $row["id"]; ?> " readonly > </td>
    </tr>

    <tr>
        <td> first Name</td>
        <td>  <input type="text" class="form-control" name="fname" value="<?php echo $row["fname"]; ?> " readonly > </td>
    </tr>
    <tr>
        <td>Last name</td>
        <td>  <input type="text" class="form-control" name="lname"  value="<?php echo $row["lname"];  ?> " readonly></td>
    </tr>
    <tr>
        <td>Position</td>
        <td> <input type="text" class="form-control" name="position"  value="<?php echo $row["position"]; ?> "readonly ></td>
    </tr>


    <tr>
        <td>Phone</td>
        <td> <input type="text" class="form-control" name="phone"  value="<?php echo $row["phone"]; ?> " readonly> </td>
    </tr>

    <tr>
        <td>Position</td>
        <td> <input type="text" class="form-control" name="position"  value="<?php echo $row["position"]; ?> " readonly></td>
    </tr>


    <tr>
        <td>Gender</td>
        <td> <input type="text" class="form-control" name="gender"  value="<?php echo $row["gender"]; ?> " readonly></td>
    </tr>

    <tr>
        <td>Department</td>
        <td> <input type="text" class="form-control" name="department"  value="<?php echo $row["department"]; ?> "readonly ></td>
    </tr>

    <tr>
        <td>username</td>
        <td> <input type="text" class="form-control" name="username"  value="<?php echo $row["username"]; ?> "readonly ></td>
    </tr>


    
    <tr>
        <td></td>
        <td>
           

            <input type="submit" name="add_salary" class="btn btn-primary" value="Add salary">
        </td>
    </tr>
</table>

</form>
</div>
</div>
</div>


<!-- Bootstrap core JavaScript -->
<script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Menu Toggle Script -->
  <script>
    $("#menu-toggle").click(function(e) {
      e.preventDefault();
      $("#wrapper").toggleClass("toggled");
    });
  </script>

</div>
</div>
</div>


<script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
