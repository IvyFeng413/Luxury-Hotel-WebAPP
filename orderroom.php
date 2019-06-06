<?php

require('db.php');

require('header.php');
$query  = "SELECT * FROM orderroom ";

$result = mysqli_query($connection, $query);

if (!$result) {
    die("query is wrong");
}

?>

 <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="#">Dashboard</a>
          </li>

          <li class="breadcrumb-item active">order room</li>
        </ol>


<html>
    
<center> <title>order room</title>
        <center> <link type="text/css" rel="stylesheet" href="style.css"></center>
<h1 style="text align:center">order room</h1><br/>
<table border="1" align="center" width="1000" cellpadding="10"cellspace>

 <thead>
<td>gue_id</td>
<td>gue_name</td>
<td>gue_phone</td>
<td>ro_type</td>
<td>check_in</td>
<td>ordertime</td>
<br>
</thead>
<body style="text-aligncenter"></body>
<?php

    
// 3. use/show data
while ($row = mysqli_fetch_array($result))
{
    echo "<tr>";
   
    echo "<td>" . $row["gue_id"] . "</td>"; 
    echo "<td>" . $row["gue_name"] . "</td>";
     echo "<td>" . $row["gue_phone"] . "</td>";
     echo "<td>" . $row["ro_type"] . "</td>";
     echo "<td>" . $row["check_in"] . "</td>";
     echo "<td>" . $row["ordertime"] . "</td>";
    echo "</tr>";
}
            
?>
    
</table>
    
            <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
