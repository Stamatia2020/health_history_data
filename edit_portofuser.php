<!-- Φόρμα Μεταβολή/διαγραφή συγκεκριμένου Ιατρού -->
<?php include "connectDB.php";?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Φόρμα Μεταβολής/Διαγραφής Ιατρού</title>
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

 
<?php

// δήλωση για να ειναι γνωστές
$options="";
$sel="";

$empid = "";
$fname = "";
$lname = "";
$id = "";
$birthdate = "";
$sex = "";
$depid = "";
$cost = "";
$date_exam = "";

if (!isset($_POST["subok"]) && !isset($_POST["subdel"]))
{
// παιρνουμε τις τιμες των πεδιων απο το προγραμμα editselect_doctor.php
$empid=$_POST["empid"];

$sql = "SELECT empid,firstname,lastname,id, birthdate, sex, depid, cost, date_exam FROM user where empid ='$empid'";
  $result = $conn->query($sql);
  if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    
    $fname = $row['firstname'];
    $lname = $row['lastname'];
    $id = $row['id'];
    $birthdate = $row['birthdate'];
    $sex = $row['sex'];
    $depid = $row['depid'];
    $cost = $row['cost'];
    $date_exam = $row[ 'date_exam'];

  }

  
  // select για να εμφανιζονται οι χώροι επίσκεψης στο πεδίο της φόρμας με τη μορφή Λίστας
  $sqld = "SELECT * FROM department";
  $resultd = $conn->query($sqld);
  if ($resultd->num_rows > 0) {
    while($rowd = $resultd->fetch_assoc()) {
        if ($rowd['depid']==$depid)
          $sel='selected';
        else
           $sel="";
        $options = $options."<option value=".$rowd['depid']." $sel>".$rowd['depname']."</option>";
    }    
  }

}

?>

</head>
<body>
<?php include 'menu_port_user.html';?>

<hr size="3">
<br>
<h3 style="text-align: center;">Μεταβολή / Διαγραφή Ιατρού</h3>
<br>
<form name="form1" action="" method="post">
<table>
<tr><td class="al">Κωδικός Ιατρού:</td>
<td><input type="text" id="empid" name="empid" readonly value="<?php echo $empid ?>"></td></tr>
<tr><td class="al">Όνομα:</td>
<td><input type="text" name="fname" value="<?php echo $fname ?>"></td></tr>
<tr><td class="al">Επώνυμο:</td>
<td><input type="text" name="lname" required value="<?php echo $lname ?>"></td></tr>
<tr><td class="al">Ταυτότητα:</td>
<td><input type="text" name="id" required value="<?php echo $id ?>"></td></tr>
<tr><td class="al">Ημερομηνία γέννησης:</td>
<td><input type="date" name="birthdate" value="<?php echo $birthdate ?>"></td></tr>
<tr><td class="al">Φύλο:</td>
<td><input type="radio" name="sex"  <?php if($sex=="Α") echo "checked";?>  value="Α" >Άνδρας&nbsp;&nbsp;
  <input type="radio" name="sex" <?php if($sex=="Γ") echo "checked";?>  value="Γ">Γυναίκα</td></tr>
<tr><td class="al">Είδος εξέτασης:</td>
<td> 
  <select name="depid" required>
    <?php echo $options;  ?>   
  </select>
</td></tr>
<tr><td class="al">Κόστος Υπηρεσιών:</td>
<td><input type="text" name="cost" required value="<?php echo $cost ?>"></td></tr>
<tr><td class="al">Ημερομηνία Εξέτασης:</td>
<td><input type="date" name="date_exam" value="<?php echo $date_exam ?>"></td></tr>

<tr><td class="al"><input type="button" value="Ακύρωση" onclick="document.location='editselect_doctor.php'">&nbsp;</td>
<td><input type="submit" name="subok" value="Μεταβολή">&nbsp;&nbsp;<input type="submit" name="subdel" value="Διαγραφή"></td></tr>
</table>  
</form>
<br>
<hr size="3">
<div id="res"></div>
<hr size="3">

<?php
// αν έχει επιλεγεί το button submit-subok εκτελείται το if για μεταβολή γιατρού
if (isset($_POST["subok"])) {  

  $empid=$_POST["empid"];
  $fname=$_POST["fname"];
  $lname=$_POST["lname"];
  $id=$_POST["id"];
  $birthdate=$_POST["birthdate"];
  $sex=$_POST["sex"];
  $depid=$_POST["depid"];
  $cost=$_POST["cost"];
  $date_exam=$_POST["date_exam"];

  $sql = "UPDATE user SET firstname='$fname', lastname='$lname', id='$id', birthdate='$birthdate', sex='$sex', depid='$depid', cost='$cost', date_exam='$date_exam' WHERE empid=$empid";

  if ($conn->query($sql)) {
     echo "<script>alert('Τα στοιχεία του Ιατρού αποθηκεύτηκαν')</script>";
   
  } else {
    echo "<script>alert('Δεν έγινε η μεταβολή')</script>";
  
  }
  
  echo "<script>document.location='editselect_doctor.php';</script>"; 
}
// αν έχει επιλεγεί το button submit-subdel εκτελείται το if για διαγραφή γιατρού

else if (isset($_POST["subdel"]))
{ 
  $empid=$_POST["empid"];
  
  $sql = "DELETE FROM user WHERE empid=$empid" ;
  if ($conn->query($sql)) {
    echo "<script>alert('Ο Ιατρός διαγράφηκε')</script>";   
   
  } else {
    echo "<script>alert('Δεν έγινε η διαγραφή')</script>";
  }
  
  echo "<script>document.location='editselect_doctor.php';</script>";
}

?>

</body>
</html>