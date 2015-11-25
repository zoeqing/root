<?php
$min=$_GET['min'];
$max=$_GET['max'];
$con = mysqli_connect('localhost','root','','week10');
//Handle DB connection error
if (!$con)
{
  die('Could not connect: ' . mysql_error());
}
$query = "SELECT * FROM book where price between ".$min." and ".$max;
$result=mysqli_query($con,$query);
echo "<table border='1'>
<tr>
<th>Book Type</th>
<th>Book Name</th>
<th>Price</th>
</tr>";

while($row = mysqli_fetch_array($result))
{
  echo "<tr>";
  echo "<td>" . $row['book_type'] . "</td>";
  echo "<td>" . $row['book_name'] . "</td>";
  echo "<td>" . $row['price'] . "</td>";
  echo "</tr>";
}
echo "</table>";

mysqli_close($con);
?> 