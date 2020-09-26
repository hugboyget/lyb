<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
</head>
<body background="xk.gif">
</body>
</br></br></br></br></br></br>
<b style="font-family:verdana;color:blue"><h1 align="center" >注册</h1></br></b><hr></br>
<form action="insertup.php" method="post" align="center">
<b style="font-family:verdana;color:red">
INITINL User name:</br></b>
<input type="text" style="font-size: 25px" size="12" name="username" required="required" onKeypress="javascript:if(event.keyCode == 32)event.returnValue = false;"  ><!--必填字段-->
</br>
<b style="font-family:verdana;color:red">
INITINL Password:</b>
</br>
<input type="Password" style="font-size: 25px" size="12" name="password" required="required" maxlength="6" onKeypress="javascript:if(event.keyCode == 32)event.returnValue = false;"  >
<br><br>
<button type="button" onclick="alert('用户名：小于12位 不含空格                密码：6位字符 不含空格')">帮助</button> <input type="submit" value="提交"><br><br>
<a href="http://localhost/Login.php">登录</a>
</form><hr>
</body>
</html>