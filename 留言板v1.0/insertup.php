<!DOCTYPE HTML>
<html>
<meta charset="utf-8">
<body background="z1.jpg">
<?php
$con = mysql_connect("localhost:3306","root","root");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("lyb", $con);

$sql="INSERT INTO users_data(username, password)
VALUES
('$_POST[username]','$_POST[password]')";

if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }
  echo"</br></br></br></br>";
echo "<h1>注册成功！</h1>";
mysql_close($con)
?>
</br><hr><h3>
<a href="http://localhost/Login.php">继续登录</a></br></br>
<a href="http://localhost/index.php">返回注册</a></br></br><h2>
</body>
</html>