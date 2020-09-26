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
  echo "<h1>查询结果</h1>";

mysql_select_db("lyb", $con);

$result = mysql_query("SELECT * FROM ly_content
WHERE title='$_POST[title]'");
while($row = mysql_fetch_array($result))
  {
  echo"<h3>留言标题:</h3>";echo "<br />";  
  echo $row['title'] ; 
  echo "<br />";
  echo"<h3>留言内容:</h3>";echo "<br />";
  echo $row['content'] ;
  echo "<br />";
  }
  mysql_close($con);
?>
<a href="http://localhost/Menu.php">返回</a>
</body>
</html>