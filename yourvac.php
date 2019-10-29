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






<center> <h2>LEAVE BALANCE </h2> </center>
<div class="row">

<div class="col-lg col-sm-12">

<table class="table table-striped">
  <tr>
    <th>FIRSTNAME</th>
    <th>LAST NAME</th>
    <th>EMAIL</th>
    <th>TELEPHONE</th>
    <th>POSITION</th>
    <th>REASON</th>
    <th>EXPECTED START</th>
    <th>EXPECTED END</th>
    
    
    <th>APPROVED??</th>
    
    <th>REMAINING  DAY</th>

        
  </tr>
  <?php
 
$conn=mysqli_connect("localhost","root","","human_ressource");

$query1=mysqli_query($conn,"select * from employee,lleave where employee.id=lleave.id and employee.id='".$_SESSION['userId']."'") or die("selecting error");
                while($row=mysqli_fetch_assoc($query1))
                    {
                ?>
                
                  <tr>
                    
                    <td><?php echo $row['fname'];?></td>
                    <td><?php echo $row['lname'];?></td>
                    <td><?php echo $row['email'];?></td>

                    <td><?php echo $row['phone'];?></td>
                    
                    <td><?php echo $row['position'];?></td>
                    <td><?php echo $row['reason'];?></td>
                    <td><?php echo $row['start'];?></td>
                    <td><?php echo $row['end'];?></td>
                   <?php if($row['aproved'] ==1)
                   { 
                     $E= $row['end'];
                     $S= $row['start'];
                     
                     $date2=date_create($E);

                     $date3=date_create($S);
                     
                     #$a=$dE->format("%R%a Days");
                     $aprove="YES";
                     $now=  date("Y-m-d");
                     $date1=date_create($now);
                    
                     $T=date_diff($date1,$date2);
                     $L=date_diff($date3,$date2);
                     $Spend=date_diff($date3,$date1);
                     $Spend = $Spend->d;
                     
                     $T = $T->d;
                     $L = $L->d;
                     $remain= 30-$L;
                    
                   
                   }
                   else
                   {
                    $aprove="NOT";
 
                   }

                   ?>
                   
                    <td><?php echo $aprove;?></td>


                    
                   
                    <td> <?php if ($row['aproved'] ==1) :   ?> 
                    <?php echo $remain;?> Days
                  <?php else :   ?>
                  NA
                    </td>
                  <?php  endif; ?>
                    
                    </td>

                    <?php
                    }
                    ?>
                    
                    

                </table>

                </div>
                </div>

                <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
                
                
                
                </body></html>