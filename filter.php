<html>
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<a class="btn btn-info btn-block my-4" href="human-resource.php">Back to Home >>>...</a>
<form class="form-inline mr-auto" action="search.php" method="GET">
  <input class="form-control mr-sm-2"  style=" border:1px solid green"type="text" placeholder="Search" aria-label="Search">
  <button class="btn blue-gradient btn-primary btn-rounded btn-sm my-0" type="submit">Search</button>
</form>


<table>
  <tr>
    <th>FIRSTNAME</th>
    <th>LAST NAME</th>
    <th>EMAIL</th>
    <th>TELEPHONE</th>
    <th>GENDER</th>
    <th>POSITION</th>

        
  </tr>

<?php{
$conn=mysqli_connect("localhost","root","","human_ressource");

$query = htmlspecialchars($query); 

$query1=mysqli_query($conn,"select * FROM employee WHERE (`fname` LIKE '%".$query."%') or die("selecting error");


    
      


{?>









                   
                
                
                 
</table>





<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>