<?php

include("_includes/config.inc");
include("_includes/dbconnect.inc");
include("_includes/functions.inc");


// check logged in
if (isset($_SESSION['id'])) {

   echo template("templates/partials/header.php");
   echo template("templates/partials/nav.php");

   // if the form has been submitted
   if (isset($_POST['btnAdd'])) {

      // build an sql statment to add details
      $sql = "INSERT INTO student set studentid ='" . $_POST['stringstudentid'] . "',";
	  $sql .= "dob ='" . $_POST['stringdob']  . "',";
	  $sql .= "firstname ='" . $_POST['txtfirstname']  . "',";
      $sql .= "lastname ='" . $_POST['txtlastname']  . "',";
      $sql .= "house ='" . $_POST['txthouse']  . "',";
      $sql .= "town ='" . $_POST['txttown']  . "',";
      $sql .= "county ='" . $_POST['txtcounty']  . "',";
      $sql .= "country ='" . $_POST['txtcountry']  . "',";
      $sql .= "postcode ='" . $_POST['txtpostcode']  . "' ";
      $sql .= "where studentid = '" . $_SESSION['id'] . "';";
      $result = mysqli_query($conn,$sql);

      echo "<script>alert('New Record(s) Have Beeen Successfully Added')</script>";
	  echo ("<meta http-equiv='refresh' content='0.5'/>");

   }
   else {
      // Build a SQL statment to return the student record with the id that
      // matches that of the session variable.
      $sql = "select * from student where studentid='". $_SESSION['id'] . "';";
      $result = mysqli_query($conn,$sql);
      $row = mysqli_fetch_array($result);

      // using <<<EOD notation to allow building of a multi-line string
      // see http://stackoverflow.com/questions/6924193/what-is-the-use-of-eod-in-php for info
      // also http://stackoverflow.com/questions/8280360/formatting-an-array-value-inside-a-heredoc
      $data['content'] = <<<EOD
<br>
   <h2 class="text-left">Add New Record(s)</h2>
   <br>
   <form name="frmAdd" action="" method="post">
   Student ID: 
    <input name="stringstudentid" type="string" /><br/>
	<br>
   Date of Birth:
    <input name="stringdob" type="string" /><br/>
	<br>
   First Name : 
   <input name="txtfirstname" type="text" /><br/>
   <br>
   Last Name :
   <input name="txtlastname" type="text"  /><br/>
   <br>
   Number and Street :
   <input name="txthouse" type="text"   /><br/>
   <br>
   Town :
   <input name="txttown" type="text"  /><br/>
   <br>
   County :
   <input name="txtcounty" type="text"  /><br/>
   <br>
   Country :
   <input name="txtcountry" type="text"   /><br/>
   <br>
   Postcode :
   <input name="txtpostcode" type="text" /><br/>
   <br>
   <input type="submit" value="Add" name="submit"/>
 
   </form>

EOD;

   }

   echo template("templates/default.php", $data);

} else {
   header("Location: index.php");
}

echo template("templates/partials/footer.php");

?>

<html>
<style>

body

{
	background-color: grey
}


</style>
</html>







