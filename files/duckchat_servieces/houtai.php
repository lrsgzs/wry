<?php
$con = mysql_connect("localhost:3306","ser17qov6",$_POST["password"]);
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
mysql_query("SET NAMES 'utf8'");
mysql_select_db("ser17qov6", $con);
$result = mysql_query("SELECT * FROM duckchatGroupApply");

echo "<table border='1'>
<tr>
<th>序号：</th>
<th>名称：</th>
<th>创建者：</th>
<th>邮箱：</th>
<th>类型：</th>

</tr>";

while($row = mysql_fetch_array($result))
  {
  echo "<tr>";
  echo "<td>".$row["number"]."</td>"
  echo "<td>" . $row['name'] . "</td>";
  echo "<td>" . $row['creator'] . "</td>";
  echo "<td>" . $row['email'] . "</td>";
  echo "<td>" . $row['type'] . "</td>";
  echo "</tr>";
  }
echo "</table>";

mysql_close($con);
?>