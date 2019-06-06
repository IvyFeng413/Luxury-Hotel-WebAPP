<?php

require('db.php');

require('header.php');

$query  = "SELECT * FROM entertainment ";

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
       <li class="breadcrumb-item active">entertainment</li>
        </ol>


<html>
    
<center> <title>entertainment</title>
        <center> <link type="text/css" rel="stylesheet" href="style.css"></center>
<h1 style="text align:center">entertainment</h1><br/>
<table border="1" align="center" width="1000" cellpadding="10"cellspace>

 <thead>
<td>id</td>
<td>ent_name</td>
<td>open time</td>
<td>close time</td>
<br>
</thead>
<body style="text-aligncenter"></body>
<?php

    
// 3. use/show data
while ($row = mysqli_fetch_array($result))
{
    echo "<tr>";
   
    echo "<td>" . $row["id"] . "</td>"; 
    echo "<td>" . $row["ent_name"] . "</td>";
    echo "<td>" . $row["open time"] . "</td>";
    echo "<td>" . $row["close time"] . "</td>"; 
    echo "</tr>";
}
            
?>
    
</table>
            <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

        
