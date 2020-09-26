<!DOCTYPE HTML>
<html>
<meta charset="utf-8">
</head>
<body background="ndmz.jpg">
<h1 align="center">留言板【修改留言】</h1>
<b style="font-family:verdana;color:blue">
黄昏，不是白昼亦不是夜晚，是我努力却看不清你的脸。-----《你的名字》</br></b>
<form action="updata.php" method="post"><hr>
 请输入【原留言】标题:<br>
<input type="varchar(20)" name="title" required="required"><!--必填字段-->
<br>
请输入修改留言标题:<br>
<input type="varchar(20)" name="title1" required="required">
<br>
请输入修改留言内容:<br>
<fieldset>
<legend>修改留言</legend>
<textarea name="content" rows="20" cols="60" placeholder="输入修改留言......">
</textarea>
</fieldset>
<br><br><br><br>
<input type="submit" value="提交"><br>
<a href="http://localhost/Menu.php">返回</a>
</form><hr>
</body>
</html>