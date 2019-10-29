<?php
require_once('connect.php');

	
$id = $_GET['id'];

$SelSql = "SELECT * FROM `employee` WHERE id=$id";

$res = mysqli_query($connection, $SelSql);

$r = mysqli_fetch_assoc($res);



if(isset($_POST) & !empty($_POST)){

    



$email=$_POST['email'];
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$phone=$_POST['phone'];
$gender=$_POST['gender'];
$position=$_POST['position'];
$department=$_POST['department'];
$username=$_POST['username'];
$password=$_POST['password'];

$UpdateSql = "UPDATE  `employee` SET  `id` =  '$id',   `fname` =  '$fname',`lname` =  '$lname' ,`email` =  '$email',`phone` =  '$phone',`gender` =  '$gender',`position` =  '$position', `department` =  '$department',`username` =  '$username', `password` =  '$password' WHERE  `id` =$id ";



#$UpdateSql = "UPDATE `employee` SET fname='$fname', lname='$lname',  email='$email',gender='$gender', password='$password' position='$position', username='$username',  department='$department',phone='$phone',      WHERE id=.$id";
$res = mysqli_query($connection, $UpdateSql);

if($res){
	

	header( 'Location: employee_report.php' ) ;
}else{
	echo "<div class='alert alert-danger'>Unable to add employee. Please try again.</div>";
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
<div class="container">
	<div class="row">
		<form method="post" class="form-horizontal col-md-6 col-md-offset-3">
		<center><h2>Edit Employee</h2></center>
			<div class="form-group">
			    <label for="input1" class="col-sm-2 control-label">First Name</label>
			    <div class="col-sm-10">
			      <input type="text" name="fname"  class="form-control"     value="<?php echo $r['fname']; ?>" id="input1" placeholder="First Name" required  />
			    </div>
			</div>

			<div class="form-group">
			    <label for="input1" class="col-sm-2 control-label">Last Name</label>
			    <div class="col-sm-10">
			      <input type="text" name="lname"  class="form-control"  value="<?php echo $r['lname']; ?>" id="input1" placeholder="Last Name" required  />
			    </div>
			</div>

			<div class="form-group">
			    <label for="input1" class="col-sm-2 control-label">E-Mail</label>
			    <div class="col-sm-10">
			      <input type="email" name="email"   value="<?php echo $r['email']; ?>" class="form-control" id="input1" placeholder="E-Mail" required  />
			    </div>
			</div>
			<div class="form-group">
			    <label for="input1" class="col-sm-2 control-label">phone</label>
			    <div class="col-sm-10">
			      <input type="text" name="phone"  value="<?php echo $r['phone']; ?>"  class="form-control" id="input1" placeholder="E-Mail" required  />
			    </div>
			</div>

			

			<div class="form-group">
			    <label for="input1" class="col-sm-2 control-label">gender</label>
			    <div class="col-sm-10">
			      <input type="text" name="gender"   value="<?php echo $r['gender']; ?>" class="form-control" id="input1" placeholder="E-Mail" required  />
			    </div>
			</div>

			

            <div class="form-group">
			    <label for="input1" class="col-sm-2 control-label">position</label>
			    <div class="col-sm-10">
			      <input type="text" name="position" value="<?php echo $r['position']; ?>"   class="form-control" id="input1" placeholder="E-Mail" required  />
			    </div>
			</div>
			<div class="form-group">
			    <label for="input1" class="col-sm-2 control-label">department</label>
			    <div class="col-sm-10">
			      <input type="text" name="department"  value="<?php echo $r['department']; ?>"  class="form-control" id="input1" placeholder="E-Mail" required  />
			    </div>
			</div>



            <div class="form-group">
			    <label for="input1" class="col-sm-2 control-label">username</label>
			    <div class="col-sm-10">
			      <input type="text" name="username" value="<?php echo $r['username']; ?>"  class="form-control" id="input1" placeholder="E-Mail"  required />
			    </div>
			</div>

			<div class="form-group">
			    <label for="input1" class="col-sm-2 control-label">password</label>
			    <div class="col-sm-10">
			      <input type="password" name="password" value="<?php echo $r['password']; ?>"  class="form-control" id="input1" placeholder="E-Mail"  required />
			    </div>
			</div>

            


            

			
			<input type="submit" name="update" class="btn btn-primary col-md-2 col-md-offset-10" value="submit" />
		</form>
	</div>
</div>
</div>
  <!-- /#wrapper -->

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
