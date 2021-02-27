<!DOCTYPE html>
<html>
<head>

</head>
<body>
<form action="formtest.php" method="get">
  <label for="fname">First name:</label>
  <input type="text" id="fname" name="fname"><br><br>
  <label for="lname">Last name:</label>
  <input type="text" id="lname" name="lname"><br><br>
  <input type="submit" value="Submit">
</form>
<?php
echo $_GET["fname"]
?><br>
<?php
echo $_GET["lname"]
?>
</body>
