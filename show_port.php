<!-- Εμφάνιση Ασθενών -->
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Εμφάνιση Ασθενών</title>
  <link rel="stylesheet" type="text/css" href="menou.css">
  <style type="text/css">
    body {
      font-size: 18px;
    }
    table {
      width: 100%;
      margin: auto;
    }
    th {
      background-color:#00628c; 
      color: #ffffe6;
    }
    tr:hover {
      background-color:#eee8aa;
   
    }
    
  </style>
  
</script>

</head>
<body>
<?php include 'menu_port.html';?>
<hr size="3">
<br><br>

<?php

include "connectDB.php";

$empid1=$_POST["empid1"];
$empid2=$_POST["empid2"];
$lname1=$_POST["lname1"];
$lname2=$_POST["lname2"];
$depid1=$_POST["depid1"];
$depid2=$_POST["depid2"];
$cost1=$_POST["cost1"];
$cost2=$_POST["cost2"];
$lname2=$lname2.'ΩΩΩΩΩΩΩΩΩΩ'; 


$sql = "SELECT empid,firstname,lastname,id, DATE_FORMAT(birthdate,'%d/%m/%Y') as birthdate, employee.depid, depname, cost  FROM employee, department where employee.depid = department.depid and empid between '$empid1' and '$empid2' and lastname between '$lname1' AND '$lname2' and employee.depid between '$depid1' and '$depid2' and cost between '$cost1' and '$cost2' order by empid";

$result = $conn->query($sql);
echo "<table border='1'><tr><th>Κωδικός</th><th>Όνομα</th><th>Επώνυμο</th><th>Ταυτότητα</th><th>Ημερ-Γέννησης</th><th>Κωδικός Χώρου Επίσκεψης</th><th>Χώρος Επίσκεψης</th><th> Κόστος</th></tr>";
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>".$row["empid"]."</td><td>".$row["firstname"]."</td><td>".$row["lastname"]."</td><td>".$row["id"]."</td><td>".$row["birthdate"]."</td><td>".$row["depid"]."</td><td>".$row["depname"]."</td><td>".$row["cost"]."</td></tr>";
    }
} 
echo "</table>";

//Close the Connection:
$conn->close();

?>

<br><br>
&nbsp;<a href="showselect_port.php">Επιστροφή</a>

</body>
</html>