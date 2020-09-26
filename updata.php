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
mysql_query("UPDATE ly_content SET title = '$_POST[title1]' 
WHERE title = '$_POST[title]'");
mysql_query("UPDATE ly_content SET content = '$_POST[content]'
WHERE title = '$_POST[title1]'");
echo "<h1>修改成功</h1>";
  mysql_close($con);
  echo "<h3>修改后的标题</h3>";
  echo "</br>";
  echo"$_POST[title1]";
  echo "</br>";
  echo "<h3>修改后的内容</h3>";
  echo"$_POST[content]";
  echo "</br>"; 
}
else
{
  echo"<h1>该留言不存在无法修改！</h1>";
}
?>
<a href="http://localhost/Menu.php">返回</a>
</body>
</html>