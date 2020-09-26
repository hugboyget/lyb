<!DOCTYPE HTML>
<html>
<meta charset="utf-8">
<body background="ndmz.jpg">
<h1 align="center">留言板【全部留言】</h1>
<?php
$con = mysql_connect("localhost:3306","root","root");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
mysql_select_db("lyb", $con);

$result = mysql_query("SELECT * FROM ly_content");
echo "<table border='1'>
<tr>
<th>TITLE</th>
<th>CONTENT</th>
</tr>";

while($row = mysql_fetch_array($result))
  {
  echo "<tr>";
  echo "<td>" . $row['title'] . "</td>";
  echo "<td>" . $row['content'] . "</td>";
  echo "</tr>";
  }
echo "</table>";
mysql_close($con);
?>
<a href="http://localhost/Menu.php">返回</a>
</body>
</html>