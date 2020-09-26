<!DOCTYPE HTML>
<html>
<meta charset="utf-8">
<body background="t1.jpg">
<b style="font-family:verdana;color:blue"><br><br><br><br><br><br>
<h1 align="center">欢迎登陆留言板</h1></b><hr><br><br>
<form action="view.php" method="post"align="center">
<b style="font-family:verdana;color:pink">
<h3 >User name:</h3></b>
<input style="font-size: 30px" size="11" type="text" name="username" required="required" onKeypress="javascript:if(event.keyCode == 32)event.returnValue = false;"  ><!--必填字段-->
<br>
<b style="font-family:verdana;color:pink"><h3>Password:</h3></b>
<input style="font-size: 30px" size="11" type="Password" name="password" required="required" maxlength="6" onKeypress="javascript:if(event.keyCode == 32)event.returnValue = false;"  >
<br><br>
<input type="submit" value="登录"><br>
<br><a href="http://localhost/index.php">注册</a><br><hr>
</form>
</body>
</html>