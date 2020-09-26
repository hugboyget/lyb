<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
</head>
<body background="ndmz.jpg">
<?php
$con = mysql_connect("localhost:3306","root","root");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("lyb", $con);
$result = mysql_query("SELECT title FROM ly_content 
WHERE title='$_POST[title]'");
$row = mysql_fetch_array($result);
$TI=$row['title'];
if($TI)
{
mysql_query("DELETE FROM ly_content WHERE title='$_POST[title]'");
echo "<h1>删除成功！</h1>";
}
else
{
  echo"<h1>该留言不存在无法删除！</h1>";
}
mysql_close($con);
?>
<a href="http://localhost/Menu.php">返回</a>
</body>
</html>