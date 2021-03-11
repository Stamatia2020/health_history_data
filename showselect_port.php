<!-- Επιλογή ασθενών -->
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Επιλογή ασθενών</title>
  <link rel="stylesheet" type="text/css" href="menou.css">
  <style type="text/css">
    body {
      font-size: 24px;
    }
    table {
      width: 80%;
    }
    tr {
      height: 35px;
    }
    .al {
      text-align: right;
      width: 45%;
    }
    
  </style>

  <script type="text/javascript">
  
  // αν οι τιμές είναι κενές δίνουμε από=0 εως=99999
  function check_val(frm) {
        if (frm.empid1.value == "") 
          frm.empid1.value = 1;
        if (frm.empid2.value == "") 
          frm.empid2.value = 999999;
        
        if (frm.lname1.value == "") 
          frm.lname1.value = "A";  // Α: αγγλικό γρ.
        if (frm.lname2.value == "") 
          frm.lname2.value = "Ω";
        
        if (frm.depid1.value == "") 
          frm.depid1.value = 1;
        if (frm.depid2.value == "") 
          frm.depid2.value = 999999;
        
        if (frm.cost1.value == "") 
          frm.cost1.value = 1;
        if (frm.cost2.value == "") 
          frm.cost2.value = 999999;
        if (frm.cost1.value > frm.cost2.value) 
          frm.cost2.value = 999999;
       
  }
  
</script>

</head>
<body>
<?php include 'menu_port.html';?>

<?php
  include "connectDB.php";

  $options="";
  // select για να εμφανιζονται στο πεδίο της φόρμας με τη μορφή Λίστας
  $sqld = "SELECT * FROM department";
  $resultd = $conn->query($sqld);
  if ($resultd->num_rows > 0) {
    while($row = $resultd->fetch_assoc()) {
        $options = $options."<option value=".$row['depid'].">".$row['depname']."</option>";
    }    
  }

 ?>

<hr size="3">
<br>
<h3 style="text-align: center;">Επιλογή ασθενών</h3>
<br>
<form name="form1" action="show_port.php" method="post"  onsubmit="return check_val(this)"> 
<table>
<tr><td></td><td>Από</td><td>Έως</td></tr>
<tr><td class="al">Κωδικός υπαλλήλου:</td>
<td><input type="text" name="empid1"></td>
<td><input type="text" name="empid2"></td></tr>
<tr><td class="al">Επώνυμο:</td>
<td><input type="text" name="lname1"></td>
<td><input type="text" name="lname2"></td></tr>
<tr><td class="al">Τμήμα:</td>
<td> 
  <select name="depid1">
    <?php echo $options;  ?>   
  </select>
</td>
<td> 
  <select name="depid2">
    <?php echo $options;  ?>   
  </select>
</td></tr>
<tr><td class="al">Πληρωμή απο ασθενή:</td>
<td><input type="text" name="cost1"></td>
<td><input type="text" name="cost2"></td></tr>
<tr><td></td><td><input type="submit" value="Εμφάνιση" name="subok">&nbsp;</td>
<td><input type="reset"></td></tr>
</table>  
</form>
<br>
<hr size="3">
<hr size="3">

</body>
</html>