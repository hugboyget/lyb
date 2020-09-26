<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
</head>
<body background="ndmz.jpg">
<h1 align="center">留言板【写留言】</h1>
<b style="font-family:verdana;color:blue">
黄昏，不是白昼亦不是夜晚，是我努力却看不清你的脸。-----《你的名字》</br></b>
<form action="insertly.php" method="post">
标题:</br>
<input type="text" name="title" required="required">
<fieldset>
<legend>写留言</legend>
<textarea name="content" rows="20" cols="60" placeholder="写你所想......">
</textarea>
</fieldset>
<input type="submit" value="发布">
<a href="http://localhost/Menu.php">返回</a>
</form>
</body>
</html>