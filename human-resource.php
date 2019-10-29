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
                <a class="dropdown-item" href="index.php" > <span class="glyphicon text-danger glyphicon-off"></span></a>

                
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="hr-transfer.php" > <span class="glyphicon text-danger glyphicon-wrench"></span></a>
              </div>
            </li>
          </ul>
        </div>
      </nav>





      <div class="container-fluid">
        <h1 class="mt-4"> <strong>Welcome  <?php echo $_SESSION['first']; ?> ! Please take an action to left menu </strong></h1>
        
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
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
