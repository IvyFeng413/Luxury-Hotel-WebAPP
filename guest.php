<?php

require('db.php');

// 2. Do a query
$query  = "SELECT guest.id, guest.username, service.ser_name, entertainment.ent_name, restaurant.type ";
$query .= "FROM guest ";
$query .= "INNER JOIN service ";
$query .= "ON guest.service_id = service.id ";
$query .= "INNER JOIN entertainment ";
$query .= "ON guest.entertainment_id = entertainment.id ";
$query .= "INNER JOIN restaurant ";
$query .= "ON guest.restaurant_id = restaurant.id ";
    
 //echo $query;
    
$result = mysqli_query($connection, $query);

if (!$result) {
    die("query is wrong");
}

require('header.php');

?>


<html>
    <head>
        <title>guest</title>
        <link type="text/css" rel="stylesheet" href="main.css">
    </head>

    <body>

 <table width="80%" border="double" cellpadding="2" cellspacing="1" align="center" >
     <tr>
         <td><h4>Guest ID</h4></td>
         <td><h4>Name</h4></td>
         <td><h4>Service Name</h4></td>
         <td><h4>Entertainment Name</h4></td>
         <td><h4>Restaurant Type</h4></td>
  

     </tr>
     
<?php

// 3. use/show data
while ($row = mysqli_fetch_array($result)) {
    echo "<tr>";
    echo "<td>" . $row["id"] . "</td>";
    echo "<td>" . $row["username"] . "</td>";
    echo "<td>" . $row["ser_name"] . "</td>";
    echo "<td>" . $row["ent_name"] . "</td>";
    echo "<td>" . $row["type"] . "</td>";


    echo "</tr>";
}
    
?>

<?php

// 4. free results
mysqli_free_result($result);

// 5. close db connection
mysqli_close($connection);

?>