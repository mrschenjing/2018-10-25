<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form action="/update?id={{$list->id}}" method="post">
	姓名：<input type="text" name="username" value="{{$list->username}}"><br/><br/>
	手机号：<input type="text" name="telphone" value="{{$list->telphone}}"><br/><br/>
	邮箱：<input type="text" name="email" value="{{$list->email}}"><br/><br/>
	<input type="submit" value="修改信息">
</form>
</body>
</html>