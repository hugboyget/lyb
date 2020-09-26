<!DOCTYPE HTML>
<html>
<meta charset="utf-8">
<body background="ndmz.jpg">
<?php
$con = mysql_connect("localhost:3306","root","root");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("lyb", $con);

$sql="INSERT INTO ly_content(title, content)
VALUES
('$_POST[title]','$_POST[content]')";

if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }
echo "<h1>发布留言成功！</h1>";
mysql_close($con)
?>
</br></br>
<a href="http://localhost/Menu.php">返回</a>
</body>
</html>