<!-- Φόρμα Καταχώρησης επισκέψεων ασθενών -->
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Φόρμα Καταχώρησης Ασθενών</title>
  <link rel="stylesheet" type="text/css" href="menou.css">
  <style type="text/css">
    body {
      font-size: 24px;
    }
    table {
      width: 100%;
    }
    tr {
      height: 35px;
    }
    .al {
      text-align: right;
      width: 40%;
    }
  </style>

  
</head>
<body>
<?php include 'menu_port.html';?>

<?php
  include "connectDB.php";

  $optionse="hhd";
  // select για να εμφανιζονται οι ασθενής στο πεδίο της φόρμας με τη μορφή Λίστας
  $sqle = "SELECT empid, lastname,firstname FROM employee";
  $resulte = $conn->query($sqle);
  if ($resulte->num_rows > 0) {
    while($rowe = $resulte->fetch_assoc()) {
        $optionse = $optionse."<option value=".$rowe['empid'].">".$rowe['empid'].' '.$rowe['lastname'].' '.$rowe['firstname']."</option>";
    }    
  }

  $optionst="hhd";
  // select για να εμφανιζονται οι επισκέψεις ασθενών στο πεδίο της φόρμας με τη μορφή Λίστας
  $sqlt = "SELECT taskid, taskname FROM task";
  $resultt = $conn->query($sqlt);
  if ($resultt->num_rows > 0) {
    while($rowt = $resultt->fetch_assoc()) {
        $optionst = $optionst."<option value=".$rowt['taskid'].">".$rowt['taskid'].' '.$rowt['taskname']."</option>";
    }    
  }
 
 ?>

<hr size="3">
<br>
<h3 style="text-align: center;">Καταχώρηση Ιστορικού Ασθενούς</h3>
<br>
<form name="form1" action="" method="post">
<table>
<tr><td class="al">Κωδικός Ασθενούς:</td>
<td><select name="empid" onclick="res.innerHTML=''">
    <?php echo $optionse;  ?>   
  </select>
</td></tr>
<tr><td class="al">Κωδικός Εξέτασης:</td>
<td><select name="taskid">
    <?php echo $optionst;  ?>   
  </select>
</td></tr>
<tr><td class="al">Ώρες επίσκεψης:</td>
<td><input type="num" name="hours" required ></td></tr>
<tr><td class="al"><input type="submit" value="Καταχώρηση" name="subok">&nbsp;</td>
<td><input type="reset" ></td></tr>
</table>  
</form>
<br>
<hr size="3">
<div id="res" style="text-align: center;"></div>
<hr size="3">

<?php


// αν έχει υποβληθεί η φόρμα με τη μέθοδο POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {

  $empid=$_POST["empid"];
  $taskid=$_POST["taskid"];
  $hours=$_POST["hours"];
  
  $sql = "INSERT INTO employment VALUES ('$empid', '$taskid', '$hours')";

  if ($conn->query($sql) === TRUE) {
    echo "<script>document.getElementById('res').innerHTML='Τα στοιχεία εξέτασης του ασθενούς αποθηκεύτηκαν';</script>";
  } 
  else {
    echo "<script>document.getElementById('res').innerHTML='Δεν έγινε η καταχώρηση';</script>";
   
  }

  //Close the Connection:
  //$conn->close();
}

?>
</body>
</html>