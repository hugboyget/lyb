<!DOCTYPE HTML>
<html>
<meta charset="utf-8">
<body background="mt.jpg">
<h1 align="center">留言板</h1>
<b style="font-family:verdana;color:blue">
黄昏，不是白昼亦不是夜晚，是我努力却看不清你的脸。-----《你的名字》</br></b>
<?php
$con = mysql_connect("localhost:3306","root","root");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
mysql_select_db("lyb", $con);

$result = mysql_query("SELECT userid FROM users_data 
WHERE username='$_POST[username]' and password='$_POST[password]'");
mysql_close($con);
$row = mysql_fetch_array($result);
$ID=$row['userid'];
if($ID)
{
header("content-type:text/html;charset=utf-8");
header('refresh:1;url=Menu.php');
echo"<h1>欢迎您$_POST[username]，登陆成功！<h1>";
}
else
{
	header("content-type:text/html;charset=utf-8");
	header('refresh:2;url=Login.php');
 	echo"<h1>用户名或密码输入错误！<h1>";
}
?>
</body>
</html>