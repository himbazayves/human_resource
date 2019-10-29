<?php
session_start();
?>

<?php
if (isset($_POST['register']))
{
  $start_date=date("Y-m-d");

$conn=mysqli_connect("localhost","root","","human_ressource") or die($conn->error());
$id=($_POST["id"]);

$email=$_POST['email'];
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$phone=$_POST['phone'];
$gender=$_POST['gender'];
$position=$_POST['position'];
$positionn=$_POST['department'];
$username=$_POST['username'];
$password=$_POST['password'];
$param_id = trim($_POST["id"]);
$length=strlen($param_id);


if (preg_match("~^0\d+$~", $param_id)) {
  echo "<div class='alert alert-danger'>not saved! id must  not starts by zero</div>";
}
else {
 




if ($length===3)
{


$qry=$conn->query("INSERT INTO `human_ressource`.`employee` (`id`, `email`, `fname`, `lname`, `phone`, `gender`, `position`, `department`, `username`, `password`,`start_date`) 
VALUES ($id, '$email', '$fname', '$lname', '$phone', '$gender', '$position','$positionn', '$username', '$password','$start_date')");
if($qry)
{
    echo "<div class='alert alert-success'>employee  was added sucessful.</div>";
   
    $qry1=$conn->query("INSERT INTO working_history (`working_history_id`, `id`,  `fname`, `lname`,`email`, `gender`, `position`,`start_date`,`department`) 
    VALUES (NULL, '$id', '$fname', '$lname','$email','$gender', '$position','$start_date','$positionn')");
    

    if($qry1){
      $qry2=$conn->query("INSERT INTO `human_ressource`.`salary` (`salary_id`, `id`) 
    VALUES (NULL, '$id')");
echo "<div class='alert alert-success'>history created for this employee.</div>";

    if($qry2){
      echo "<div class='alert alert-success'>salary created for this new employee.</div>";
      
    }

    else {
      echo "salary not added";
    }

    }

    else 
    {
      echo" history not aded";
    }
    
    



}
else
{

  
    echo "<div class='alert alert-danger'>Unable to add employee.The id must be unique , please ask admin</div>";
}

}  

else
{

  
    echo "<div class='alert alert-danger'>Unable to add employee.The ID must be 3 digit number</div>";
}

}

}



?>




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
        
        <a href="hr-transfer.php" class="list-group-item list-group-item-action bg-light"> <span class="glyphicon glyphicon-wrench"></span> Acount Settings</a>
        <a href="working_history.php" class="list-group-item list-group-item-action bg-light"> <span class=" glyphicon glyphicon-book"></span> Employee history</a>
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
                <a class="dropdown-item"  href="index.php" > <span class="glyphicon text-danger glyphicon-off"></span></a>

                
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="hr-transfer.php" > <span class="glyphicon text-danger glyphicon-wrench"></span></a>
              </div>
            </li>
          </ul>
        </div>
      </nav>




    
       
      
 
        <div class="register container">
        <div class="row">
    <div class="col-lg- col-sm-12"></div>
    <div class="col-lg- col-sm-12">
           
            <form action="#" method="POST"  class="text-center  form-control mb-4 border  p-5">
                <h5> ADD NEW EMPLOYEE</h5>
                <input type="number" id="defaultLoginFormEmail" class="form-control mb-4"  placeholder="id ( enter three digit numbers, do not start by zero)" name="id" required>
                
                    <input type="text" id="defaultLoginFormEmail" class="form-control mb-4" placehololder="Email"  placeholder="Email" name="email">
                
                
                    <input type="text" class="form-control mb-4" placeholder="First name" name="fname">
               
                    <input type="text" class="form-control mb-4" placeholder="last name" name="lname">
                
              
                    <input type="text" class="form-control mb-4" placeholder="Tel number" name="phone">
                
               
                    
                    <select class="form-control mb-4" name="gender" id="sel1">
                         <option>Male </option>
                          <option>Female</option>
   
                      </select>
               
                
                    <input type="text" class="form-control mb-4" name="position" placeholder="position">
               
                
                    <input type="text" class="form-control mb-4" name="username" placeholder="Username">
                
                
                        <input type="password" class="form-control mb-4"  placeholder="password" name="password">
                    
                       


                        <select name="department"  class="form-control mb-4">
	<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "human_ressource";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT DISTINCT dep_name FROM departement";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
	while($row = $result->fetch_assoc()) 
	{
	?>
		<option  value=<?php echo $row['dep_name']; ?> style="font-weight:bold;font-size:16px;"><?php echo $row['dep_name']; ?></option>
<?php
}
$conn->close();
} 
?>
</select>
                            
                            
                            
                            
                            
                            
                            
                            
                            <input type="submit" name="register" class="btn btn-info btn-block my-4" value="save">
                      
            </form>
</div>

<div class="col-lg- col-sm-12"> <div>

        </div>
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
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
