<?php
$q=$_GET['q'];

$con = mysqli_connect('us-cdbr-iron-east-03.cleardb.net','ba60ab5043afbc','6488aafe','ad_a01a70d21ba2f96');

//Handle DB connection error
if (!$con)
{
  die('Could not connect: ' . mysql_error());
}


$query = "SELECT * FROM fruit WHERE fruit_name = '$q'";
$result = mysql_query($query);

echo "<table border='1'>
<tr>
<th>ID</th>
<th>Name</th>
<th>Price</th>
</tr>";

while($row = mysql_fetch_array($result))
{
  echo "<tr>";
  echo "<td>" . $row['fruit_id'] . "</td>";
  echo "<td>" . $row['fruit_name'] . "</td>";
  echo "<td>" . $row['price'] . "</td>";
  echo "</tr>";
}
echo "</table>";

mysql_close($con);
?> 