<!-- Επιλογή ασθενών -->
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Διαχείριση Ιατρών</title>
  <link rel="stylesheet" type="text/css" href="menou.css">
  <style type="text/css">
    body {
      font-size: 24px;
    }
    table {
      width: 70%;
      margin: auto;
    }
    tr {
      height: 35px;
    }
    .al {
      text-align: right;
      width: 45%;
    }
    
  </style>
  
</head>
<body>
<?php include 'menu_port_user.html';?>

<?php
  include "connectDB.php";

  $optionse="";
  // select για να εμφανιζονται οι ασθενείς στο πεδίο της φόρμας με τη μορφή Λίστας
  $sqle = "SELECT empid, lastname,firstname FROM user";
  $resulte = $conn->query($sqle);
  if ($resulte->num_rows > 0) {
    while($rowe = $resulte->fetch_assoc()) {
        $optionse = $optionse."<option value=".$rowe['empid'].">".$rowe['empid'].' '.$rowe['lastname'].' '.$rowe['firstname']."</option>";
    }    
  }

 ?>
<hr size="3">
<br>
<h3 style="text-align: center;">Διαχείριση Ιατρών</h3>
<br>
<form name="form1" action="edit_portofuser.php" method="post" > 
<table>
<tr><td class="al">Επιλογή :</td>
<td> 
  <select name="empid">
    <?php echo $optionse;  ?>   
  </select>
</td>
</tr><tr></tr>
<tr><td></td><td><input type="submit" value="Συνέχεια" style="width: 200px; font-size: 18px" name="sok"></td></tr>
</table>  
</form>
<br>
<hr size="3">
<hr size="3">

</body>
</html>