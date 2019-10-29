<?php
session_start();
if (isset($_POST['register']))
{
$conn=mysqli_connect("localhost","root","","human_ressource") or die($conn->error());
$reason=$_POST['reason'];
$start=$_POST['start'];
$end=$_POST['end'];

$now=date("Y-m-d");
$date1=date_create($start);
$date2=date_create($end);
$date3=date_create($now);

$diff=date_diff($date1,$date1);
$diff = $diff->d;
                     
                    



if( $date3<$date1){


  if ($date2> $date1)

  {



$qry=$conn->query("INSERT INTO `human_ressource`.`lleave` (`leave_id`, `id`,  `reason`, `start`,`end`) 
VALUES (NULL, '". $_SESSION['userId']."', '$reason', '$start', '$end')");
if($qry)
{
    echo "<div class='alert alert-success'>leave  was requested sucessful.</div>";
}
else
{
    echo "<script>alert('fail to save')</script>";
}

}


else {

  echo "<div class='alert alert-danger'>not requested! your end date must be greater to start date.</div>";

}



}



else
{


  echo "<div class='alert alert-danger'>not requested !expected start date must me greater to now .</div>";
}



}



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
     
        <a  href="vacancy.php "class="list-group-item list-group-item-action bg-light"><span class="glyphicon  glyphicon-plus"> Request leave</span></a>
        <a  href="yourvac.php" class="list-group-item list-group-item-action bg-light"> <span class="glyphicon glyphicon-check"> My Leave</span></a>
        
       
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



       
           
            <form  class="text-center  form-control mb-4 border border-light p-5" action="#" method="POST">
                 <label> Leave Reason </label>
                    <textarea cols="30 "  class="form-control mb-4" rows="5" placeholder="reason" name="reason" required></textarea>
                    <label > Expected start date </label>
                    <input  class="form-control mb-4" type="date" placeholder="expected start of vaccancy" name="start" required>
             
                    <label > Expected End date </label>
                    <input  class="form-control mb-4" type="date" name="end" placeholder="expected end" required>
                
                            <input type="submit" name="register" class="btn btn-info btn-block my-4" value="save" >
                       
            </form>

        

        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
                
                
    </body>
</html>