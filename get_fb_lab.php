<?php
$selIndex=$_GET['selIndex'];
$con = mysqli_connect('us-cdbr-iron-east-03.cleardb.net','ba60ab5043afbc','6488aafe','ad_a01a70d21ba2f96');
//Handle DB connection error
if (!$con)
{
  die('Could not connect: ' . mysql_error());
}
$query = "SELECT * FROM psy_test where idpsy_test = ".$selIndex."";
$result=mysqli_query($con,$query);
echo "<table border='1'>
<tr>
<th>PSY ID</th>
<th>PSY ANSWER</th>
</tr>";

while($row = mysqli_fetch_array($result))
{
  echo "<tr>";
  echo "<td>" . $row['idpsy_test'] . "</td>";
  echo "<td>" . $row['resultpsd_test'] . "</td>";
  echo "</tr>";
}
echo "</table>";

mysqli_close($con);
?> 