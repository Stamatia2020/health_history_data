<!DOCTYPE html>
<html lang="el">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Προσωπικά στοιχεία Ιατρού </title>
</head>

<body style="background: url(images/background.jpg); background-size:cover" .>
    <font face= "Tahoma" color="white">
      <?php include "connectDB.php";

  $optionse="hhd";
  // select για να εμφανιζονται οι ασθενής στο πεδίο της φόρμας με τη μορφή Λίστας
  $sqle = "INSERT INTO `personal.data` (`doctorid`, `adress`, `surname`, `country`, `gender`, `phonenumber`, `birthdate`) VALUES (\'ΣΤΑΜΑΤΙΑ\', \'ΘΕΣΣΑΛΟΝΙΚΗ\', \'ΚΟΥΙΔΟΥ\', \'ΘΕΣΣΑΛΟΝΙΚΗ\', \'Γ\', \'6976568614\', \'1991-08-12\')";
 ?>
        <center>
            <caption color="write"> <b> Εγγραφή Γιατρού <b></caption> <br> <br>
       <form name="form2" action="" method="post">
           
           <table border="5" bgcolor="grey" style="text-align: center;">
       
       <tr>
               <th bolder=6 bgcolor="Mist blue"align="center">ΠΡΟΣΩΠΙΚΑ ΣΤΟΙΧΕΙΑ</th>
               <th bolder=6 bgcolor="Mist blue"align="center">ΣΤΟΙΧΕΙΑ ΕΠΙΚΟΙΝΩΝΙΑΣ</th>
       </tr>
       <tr>
           <td> Όνομα :<input type="text" name="doctorid"> <br> </td>
           <td> Διεύθυνση Εργασίας : <input type="text" name="adress"> <br></td>
       </tr>
       <tr>
           <td>Επώνυμο:<input type="text" name="surname"> <br> </td>
           <td> Πόλη εργασίας :
       <select name="country">
               <option value="Th"> Θεσσαλονίκη </option>
               <option value="Ath"> Αθήνα </option>
               <option value="Lar"> Λάρισσα </option>
               <option value="Kr"> Κρήτη </option>
               <option value="Bo"> Βόλος </option>
               <option value="Or"> Ορεστιάδα </option>
               <option value="Ka"> Καστοριά </option>
               <option value="Do"> Δωδεκάννησα </option>
               <option value="Ep"> Επτάνησα </option>
           </select></td>
       </tr>
       <tr>
           <td> Φύλο :   <br>
           <input type="radio" name="gender" value="male"> Άντρας <br>
           <input type="radio" name="gender" value="female"> Γυναίκα <br>
           <input type="radio" name="gender" value="unknown"> Δεν δηλώνω <br>
           <br> </td>
           <td> Κινητό : <input type="number" name="phonenumber"> </td>
       </tr>
       <tr>
           <td> Ημερομηνία Γέννησης  <input type="date" name="birthdate"value="Ημερομηνία Γέννησης"> </td>
           <td> E-mail <input type="email" name ="email" </td>
       </tr>
       <tr>
           <td> <input type="submit"> </td>
           <td> <input type="reset" value="Επαναφορά φόρμας"> <br> </td>
       </tr>
       </table>
           
           <br>
           Άλλες πληροφορίες : <br>
           <textarea rous="5" cds="60" rows="5" cols="70" > </textarea> <br>
           <br>
           Επίπεδο εκπαίδευσης : <br>
           <input type="checkbox" name="diploma" value="AEI"> ΑΕΙ-ΤΕΙ
           <input type="checkbox" name="master" value="MS"> ΜΕΤΑΠΤΥΧΙΑΚΟ
           <input type="checkbox" name="doctora" value="DR"> ΔΙΔΑΚΤΟΡΙΚΟ
           <br>
           <br>
           <br>    
            <label for="myfile"> Ανεβάστε το βιογραφικό σας :</label>
         <input type="file" id="myfile" name="myfile"> <br> <br>

          <button href="doctor.menu.html"> Πίσω στο Menu </button>
          <button href="HHDmain.html"> Πίσω στην Αρχική </button> <br> <br>
          <a href="personal.data.html"> Παράλειψη εγγραφής </a>
       </center> 

       </body>
</html>