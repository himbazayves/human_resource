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
                <a class="dropdown-item" href="hr-transfer.php"> <span class="glyphicon text-danger glyphicon-off"></span></a>

                
                <div class="dropdown-divider"></div>
                <a class="dropdown-item"  href="index.php"> <span class="glyphicon text-danger glyphicon-wrench"></span></a>
              </div>
            </li>
          </ul>
        </div>
      </nav>




<center><h2>LEAVES REQUEST</h2> </center>


<table class="table  table-striped">
<input class="form-control border-success" id="myInput" type="text" placeholder="Search.........">
<thead>
  <tr>
    <th>FIRSTNAME</th>
    <th>LAST NAME</th>
    <th>EMAIL</th>
    <th>TELEPHONE</th>
    <th>POSITION</th>
    <th>REASON</th>
    <th>EXPECTED START</th>
    <th>EXPECTED END</th>
    <th>APPROVE</th>
    <th>Deny</th>
    

        
  </tr>
  </thead>
  <?php
$conn=mysqli_connect("localhost","root","","human_ressource");

$query1=mysqli_query($conn,"select * from employee,lleave where employee.id=lleave.id and lleave.aproved=0") or die("selecting error");
                while($row=mysqli_fetch_assoc($query1))
                    {
                ?>
                <tbody id="myTable">
                  <tr>
                    
                    <td><?php echo $row['fname'];?></td>
                    <td><?php echo $row['lname'];?></td>
                    <td><?php echo $row['email'];?></td>

                    <td><?php echo $row['phone'];?></td>
                    
                    <td><?php echo $row['position'];?></td>
                    <td><?php echo $row['reason'];?></td>
                    <td><?php echo $row['start'];?></td>
                    <td><?php echo $row['end'];?></td>
                    <form action="#" method="post">
<input type="hidden" name="id" value="<?php echo $row['leave_id'];?>">


<td><input type="submit" name="aprove" value="Approve" class="btn btn-primary"></td> 
<td><input type="submit" name="delete" value="Deny" class="btn btn-danger"></td> 



</form>                   
                  
                  
                 
                 <?php

                if(isset($_GET['id']))
                {
                  $id=$_GET['id'];
                }
                if(isset($_POST['delete']))
                {
                
                $id=$_POST['id'];
               // echo"<script>alert($id)</script>";
                $del1="DELETE FROM lleave where leave_id='$id'";

                if(($conn->query($del1)==true))
                 {
//echo "user deleted success";
                  echo '<script>location.href="aprovevac.php"</script>';
                  
                 }
                 else{
                 // echo "delete fail";
                  echo '<script>location.href="aprovevac.php"</script>';

                 }
                }
                
               

                if(isset($_GET['id']))
                {
                  $id=$_GET['id'];
                }
                if(isset($_POST['aprove']))
                {
                
                $id=$_POST['id'];
                                  //echo"<script>alert($id)</script>";

                $update=mysqli_query($conn,"UPDATE  `human_ressource`.`lleave` SET  `aproved` =  '1' WHERE  `lleave`.`leave_id` ='$id' LIMIT 1 ;
                ") or die(mysqli_error($del1));
                if($update==true)
                {
                  echo "well aproved";
                  echo '<script>location.href="aprovevac.php"</script>';


                }
                else
                {
                  echo "not aproved";
                  echo '<script>location.href="aprovevac.php"</script>'; 
                }

                }
              }

                ?>
                    </tr>
                    <tbody id="myTable">
                    
  
</table>

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
